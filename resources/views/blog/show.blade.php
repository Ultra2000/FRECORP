@extends('layouts.app')

@section('title', ($post->meta_title ?: $post->title) . ' — Blog FRECORP')
@section('meta_description', $post->meta_description ?: $post->excerpt)

@php $ogImage = $post->featured_image ? Storage::url($post->featured_image) : null; @endphp
@section('og_title', ($post->meta_title ?: $post->title) . ' — Blog FRECORP')
@section('og_description', $post->meta_description ?: $post->excerpt)
@section('og_type', 'article')
@if($ogImage)@section('og_image', $ogImage)@endif

@section('meta_extra')
    <meta property="article:published_time" content="{{ $post->published_at->toIso8601String() }}">
    <meta property="article:section" content="{{ $post->categoryLabel() }}">
    <link rel="canonical" href="{{ route('blog.show', $post) }}">
    @php
    $jsonLd = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $post->title,
        'description' => $post->meta_description ?: $post->excerpt,
        'datePublished' => $post->published_at->toIso8601String(),
        'dateModified' => $post->updated_at->toIso8601String(),
        'author' => ['@type' => 'Organization', 'name' => 'FRECORP'],
        'publisher' => ['@type' => 'Organization', 'name' => 'FRECORP', 'logo' => ['@type' => 'ImageObject', 'url' => asset('images/logo.png')]],
        'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => route('blog.show', $post)],
    ];
    if ($post->featured_image) $jsonLd['image'] = Storage::url($post->featured_image);
    @endphp
    <script type="application/ld+json">{{ json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }}</script>

    <style>
        .prose h2 { font-size:1.5rem; font-weight:700; color:#fff; margin:2rem 0 1rem; }
        .prose h3 { font-size:1.2rem; font-weight:600; color:#e2e8f0; margin:1.5rem 0 .75rem; }
        .prose p  { color:#94a3b8; line-height:1.8; margin-bottom:1.25rem; }
        .prose ul, .prose ol { color:#94a3b8; padding-left:1.5rem; margin-bottom:1.25rem; }
        .prose li { margin-bottom:.5rem; }
        .prose strong { color:#e2e8f0; }
        .prose a { color:#818cf8; text-decoration:underline; }
        .prose blockquote { border-left:3px solid #6366f1; padding-left:1rem; color:#64748b; font-style:italic; margin:1.5rem 0; }
        .prose code { background:rgba(99,102,241,.15); color:#a5b4fc; padding:.2em .4em; border-radius:.25rem; font-size:.9em; }
        .prose pre { background:#1e293b; border:1px solid rgba(255,255,255,.1); border-radius:.75rem; padding:1.25rem; overflow-x:auto; margin-bottom:1.5rem; }
        .prose img { border-radius:.75rem; margin:1.5rem 0; max-width:100%; }
    </style>
@endsection

@section('content')
<article class="relative pt-36 pb-20 px-6">
    <div class="max-w-3xl mx-auto relative z-10">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-8">
            <a href="{{ route('blog.index') }}" class="hover:text-indigo-400 transition">Blog</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-slate-400">{{ $post->categoryLabel() }}</span>
        </nav>

        {{-- Meta --}}
        <div class="flex items-center gap-3 mb-6">
            @php $colors = ['reform'=>'text-orange-400 bg-orange-500/10','facturation'=>'text-emerald-400 bg-emerald-500/10','tutorial'=>'text-indigo-400 bg-indigo-500/10']; @endphp
            <span class="text-xs font-bold px-3 py-1 rounded-full {{ $colors[$post->category] ?? 'text-slate-400 bg-white/5' }}">
                {{ $post->categoryLabel() }}
            </span>
            <span class="text-slate-500 text-sm">{{ $post->published_at->format('d M Y') }}</span>
            <span class="text-slate-500 text-sm">· {{ $post->reading_time }} min de lecture</span>
        </div>

        {{-- Titre --}}
        <h1 class="text-3xl sm:text-4xl font-extrabold text-white mb-6 leading-tight">
            {{ $post->title }}
        </h1>

        {{-- Excerpt --}}
        <p class="text-xl text-slate-400 mb-10 leading-relaxed border-l-4 border-indigo-500/40 pl-5">
            {{ $post->excerpt }}
        </p>

        {{-- Image --}}
        @if($post->featured_image)
            <div class="rounded-3xl overflow-hidden mb-10">
                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full">
            </div>
        @endif

        {{-- Contenu --}}
        <div class="prose max-w-none">
            {!! $post->content !!}
        </div>

        {{-- CTA --}}
        <div class="mt-16 glass-card p-8 rounded-3xl border-indigo-500/20 text-center">
            <h3 class="text-xl font-bold mb-3">Prêt à simplifier votre gestion ?</h3>
            <p class="text-slate-400 mb-6">1 mois gratuit, sans carte bancaire.</p>
            <a href="https://app.frecorp.fr/admin/register" class="btn-primary inline-flex items-center gap-2 px-8 py-3 rounded-xl font-bold text-white">
                Commencer gratuitement <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>

        {{-- Articles liés --}}
        @if($related->isNotEmpty())
            <div class="mt-16">
                <h2 class="text-2xl font-bold mb-8">Articles similaires</h2>
                <div class="grid sm:grid-cols-3 gap-4">
                    @foreach($related as $r)
                        <a href="{{ route('blog.show', $r) }}" class="glass-card p-5 rounded-2xl hover:border-indigo-500/30 transition group">
                            <p class="text-xs text-indigo-400 font-semibold mb-2">{{ $r->categoryLabel() }}</p>
                            <h4 class="text-sm font-bold text-white group-hover:text-indigo-300 transition line-clamp-3">{{ $r->title }}</h4>
                            <p class="text-xs text-slate-500 mt-2">{{ $r->reading_time }} min · {{ $r->published_at->format('d/m/Y') }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</article>
@endsection
