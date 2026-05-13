@extends('layouts.landing')

@section('title', 'Blog FRECORP | Réforme Factur-X, Facturation, Tutoriels')
@section('meta_description', 'Guides pratiques sur la réforme Factur-X 2026, la facturation électronique et des tutoriels pour utiliser FRECORP ERP.')

@section('content')
<section class="pt-32 pb-20 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto">

        {{-- Header --}}
        <div class="text-center mb-14">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4" style="letter-spacing:-.03em">
                <span class="text-slate-900">Le Blog</span>
                <span class="gradient-text"> FRECORP</span>
            </h1>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto">
                Réforme Factur-X 2026, bonnes pratiques de facturation, et guides d'utilisation de l'ERP.
            </p>
        </div>

        {{-- Filtres catégories --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="{{ route('blog.index') }}"
               class="px-5 py-2 rounded-full text-sm font-semibold transition border {{ !$category ? 'gradient-bg text-white border-transparent shadow-md' : 'bg-white text-slate-600 border-slate-200 hover:border-indigo-300 hover:text-indigo-600' }}">
                Tous les articles
            </a>
            @foreach($categories as $key => $label)
                <a href="{{ route('blog.index') }}?categorie={{ $key }}"
                   class="px-5 py-2 rounded-full text-sm font-semibold transition border {{ $category === $key ? 'gradient-bg text-white border-transparent shadow-md' : 'bg-white text-slate-600 border-slate-200 hover:border-indigo-300 hover:text-indigo-600' }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>

        {{-- Grille articles --}}
        @if($posts->isEmpty())
            <div class="text-center py-20 text-slate-400">
                <i class="fas fa-newspaper text-4xl mb-4 block opacity-30"></i>
                Aucun article publié pour l'instant.
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @foreach($posts as $post)
                    <a href="{{ route('blog.show', $post) }}" class="soft-card overflow-hidden group block">
                        @if($post->featured_image)
                            <div class="aspect-video overflow-hidden">
                                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        @else
                            <div class="aspect-video bg-gradient-to-br from-indigo-50 to-violet-50 flex items-center justify-center">
                                <i class="fas fa-newspaper text-4xl text-indigo-300"></i>
                            </div>
                        @endif

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                @php
                                    $colors = [
                                        'reform'      => 'text-orange-600 bg-orange-50 border-orange-100',
                                        'facturation' => 'text-emerald-600 bg-emerald-50 border-emerald-100',
                                        'tutorial'    => 'text-indigo-600 bg-indigo-50 border-indigo-100',
                                    ];
                                @endphp
                                <span class="text-xs font-bold px-3 py-1 rounded-full border {{ $colors[$post->category] ?? 'text-slate-600 bg-slate-50 border-slate-200' }}">
                                    {{ $post->categoryLabel() }}
                                </span>
                                <span class="text-xs text-slate-400">{{ $post->reading_time }} min</span>
                            </div>

                            <h2 class="text-lg font-bold text-slate-900 mb-2 line-clamp-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-slate-500 text-sm line-clamp-3 mb-4">{{ $post->excerpt }}</p>

                            <div class="flex items-center justify-between text-xs text-slate-400">
                                <span>{{ $post->published_at->format('d/m/Y') }}</span>
                                <span class="text-indigo-600 font-semibold group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
                                    Lire <i class="fas fa-arrow-right text-[10px]"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="flex justify-center">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
