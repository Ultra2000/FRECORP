@extends('layouts.app')

@section('title', 'Blog FRECORP — Réforme Factur-X, Facturation, Tutoriels')
@section('meta_description', 'Guides pratiques sur la réforme Factur-X 2026, la facturation électronique et des tutoriels pour utiliser FRECORP ERP.')

@section('content')
<section class="relative pt-36 pb-16 px-6">
    <div class="max-w-6xl mx-auto relative z-10">

        {{-- Header --}}
        <div class="text-center mb-14">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4">
                <span class="text-white">Le Blog</span>
                <span class="gradient-text"> FRECORP</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Réforme Factur-X 2026, bonnes pratiques de facturation, et guides d'utilisation de l'ERP.
            </p>
        </div>

        {{-- Filtres catégories --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <a href="{{ route('blog.index') }}"
               class="px-5 py-2 rounded-full text-sm font-semibold transition {{ !$category ? 'bg-indigo-600 text-white' : 'glass-card text-slate-400 hover:text-white' }}">
                Tous les articles
            </a>
            @foreach($categories as $key => $label)
                <a href="{{ route('blog.index') }}?categorie={{ $key }}"
                   class="px-5 py-2 rounded-full text-sm font-semibold transition {{ $category === $key ? 'bg-indigo-600 text-white' : 'glass-card text-slate-400 hover:text-white' }}">
                    {{ $label }}
                </a>
            @endforeach
        </div>

        {{-- Grille articles --}}
        @if($posts->isEmpty())
            <div class="text-center py-20 text-slate-500">
                <i class="fas fa-newspaper text-4xl mb-4 block opacity-30"></i>
                Aucun article publié pour l'instant.
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @foreach($posts as $post)
                    <a href="{{ route('blog.show', $post) }}" class="glass-card rounded-3xl overflow-hidden group hover:border-indigo-500/30 transition-all duration-300">
                        @if($post->featured_image)
                            <div class="aspect-video overflow-hidden">
                                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                        @else
                            <div class="aspect-video bg-gradient-to-br from-indigo-900/50 to-purple-900/50 flex items-center justify-center">
                                <i class="fas fa-newspaper text-4xl text-indigo-400/30"></i>
                            </div>
                        @endif

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                @php
                                    $colors = ['reform'=>'text-orange-400 bg-orange-500/10','facturation'=>'text-emerald-400 bg-emerald-500/10','tutorial'=>'text-indigo-400 bg-indigo-500/10'];
                                @endphp
                                <span class="text-xs font-bold px-3 py-1 rounded-full {{ $colors[$post->category] ?? 'text-slate-400 bg-white/5' }}">
                                    {{ $post->categoryLabel() }}
                                </span>
                                <span class="text-xs text-slate-500">{{ $post->reading_time }} min</span>
                            </div>

                            <h2 class="text-lg font-bold text-white mb-2 group-hover:text-indigo-300 transition line-clamp-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-slate-400 text-sm line-clamp-3 mb-4">{{ $post->excerpt }}</p>

                            <div class="flex items-center justify-between text-xs text-slate-500">
                                <span>{{ $post->published_at->format('d/m/Y') }}</span>
                                <span class="text-indigo-400 font-semibold group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
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
