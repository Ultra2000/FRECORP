<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Articles';
    protected static ?string $modelLabel = 'Article';
    protected static ?string $pluralModelLabel = 'Articles';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Contenu')
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('Titre')
                        ->required()
                        ->live(onBlur: true)
                        ->maxLength(255)
                        ->afterStateUpdated(function (string $operation, ?string $state, Forms\Set $set) {
                            if ($operation === 'create' && filled($state)) {
                                $set('slug', Str::slug($state));
                            }
                        }),

                    Forms\Components\TextInput::make('slug')
                        ->label('Slug URL')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255)
                        ->helperText('Généré automatiquement depuis le titre, modifiable au besoin.'),

                    Forms\Components\Select::make('category')
                        ->label('Catégorie')
                        ->options(Post::categories())
                        ->required(),

                    Forms\Components\Textarea::make('excerpt')
                        ->label('Résumé')
                        ->required()
                        ->rows(3)
                        ->maxLength(300)
                        ->columnSpanFull(),

                    Forms\Components\RichEditor::make('content')
                        ->label('Contenu')
                        ->required()
                        ->columnSpanFull()
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('blog/attachments')
                        ->saveUploadedFileAttachmentsUsing(function ($file) {
                            $disk = 'public';
                            $directory = 'blog/attachments';
                            $maxWidth = 1200;
                            $quality = 85;

                            $path = $file->store($directory, $disk);
                            $fullPath = \Illuminate\Support\Facades\Storage::disk($disk)->path($path);
                            $mime = $file->getMimeType();

                            if (str_starts_with($mime, 'image/')) {
                                try {
                                    [$w, $h] = getimagesize($fullPath);

                                    if ($w > $maxWidth) {
                                        $ratio = $maxWidth / $w;
                                        $newW = $maxWidth;
                                        $newH = (int) round($h * $ratio);

                                        $source = match ($mime) {
                                            'image/jpeg' => imagecreatefromjpeg($fullPath),
                                            'image/png'  => imagecreatefrompng($fullPath),
                                            'image/webp' => imagecreatefromwebp($fullPath),
                                            default      => null,
                                        };

                                        if ($source) {
                                            $resized = imagecreatetruecolor($newW, $newH);

                                            // Préserver la transparence pour PNG/WebP
                                            if (in_array($mime, ['image/png', 'image/webp'])) {
                                                imagealphablending($resized, false);
                                                imagesavealpha($resized, true);
                                            }

                                            imagecopyresampled($resized, $source, 0, 0, 0, 0, $newW, $newH, $w, $h);

                                            match ($mime) {
                                                'image/jpeg' => imagejpeg($resized, $fullPath, $quality),
                                                'image/png'  => imagepng($resized, $fullPath, 8),
                                                'image/webp' => imagewebp($resized, $fullPath, $quality),
                                                default      => null,
                                            };

                                            imagedestroy($source);
                                            imagedestroy($resized);
                                        }
                                    }
                                } catch (\Throwable $e) {
                                    \Illuminate\Support\Facades\Log::warning('Blog image resize failed: ' . $e->getMessage());
                                }
                            }

                            return \Illuminate\Support\Facades\Storage::disk($disk)->url($path);
                        }),
                ])
                ->columns(2),

            Forms\Components\Section::make('Image & Publication')
                ->schema([
                    Forms\Components\FileUpload::make('featured_image')
                        ->label('Image à la une')
                        ->image()
                        ->disk('public')
                        ->directory('blog/images')
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('1200')
                        ->imageResizeTargetHeight('630')
                        ->columnSpanFull(),

                    Forms\Components\TextInput::make('reading_time')
                        ->label('Temps de lecture (min)')
                        ->numeric()
                        ->default(3),

                    Forms\Components\DateTimePicker::make('published_at')
                        ->label('Date de publication')
                        ->helperText('Laisser vide pour sauvegarder en brouillon'),
                ])
                ->columns(2),

            Forms\Components\Section::make('SEO')
                ->schema([
                    Forms\Components\TextInput::make('meta_title')
                        ->label('Titre SEO')
                        ->maxLength(60)
                        ->helperText('Max 60 caractères'),

                    Forms\Components\Textarea::make('meta_description')
                        ->label('Description SEO')
                        ->maxLength(160)
                        ->rows(2)
                        ->helperText('Max 160 caractères'),
                ])
                ->columns(1)
                ->collapsed(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('featured_image')
                    ->label('')
                    ->disk('public')
                    ->width(60)
                    ->height(40)
                    ->defaultImageUrl(asset('images/placeholder.png')),

                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->limit(50),

                Tables\Columns\BadgeColumn::make('category')
                    ->label('Catégorie')
                    ->formatStateUsing(fn ($state) => Post::categories()[$state] ?? $state)
                    ->colors([
                        'warning' => 'reform',
                        'success' => 'facturation',
                        'primary' => 'tutorial',
                    ]),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publié le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->placeholder('Brouillon'),

                Tables\Columns\TextColumn::make('reading_time')
                    ->label('Lecture')
                    ->suffix(' min'),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Modifié')
                    ->since()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Catégorie')
                    ->options(Post::categories()),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('Voir')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->url(fn (Post $record) => $record->isPublished() ? route('blog.show', $record) : '#')
                    ->openUrlInNewTab(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit'   => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
