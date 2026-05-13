@extends('layouts.landing')

@section('title', ($post->meta_title ?: $post->title) . ' | Blog FRECORP')
@section('meta_description', $post->meta_description ?: $post->excerpt)

@php $ogImage = $post->featured_image ? Storage::url($post->featured_image) : null; @endphp
@section('og_title', ($post->meta_title ?: $post->title) . ' | Blog FRECORP')
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
        .prose h2 { font-size: 1.75rem; font-weight: 800; color: #0f172a; margin: 2.5rem 0 1rem; letter-spacing: -.02em; }
        .prose h3 { font-size: 1.25rem; font-weight: 700; color: #1e293b; margin: 2rem 0 .75rem; }
        .prose p  { color: #475569; line-height: 1.8; margin-bottom: 1.25rem; font-size: 1.0625rem; }
        .prose ul, .prose ol { color: #475569; padding-left: 1.5rem; margin-bottom: 1.25rem; }
        .prose li { margin-bottom: .5rem; }
        .prose strong { color: #0f172a; font-weight: 600; }
        .prose a { color: #6366f1; text-decoration: underline; text-underline-offset: 3px; }
        .prose a:hover { color: #4f46e5; }
        .prose blockquote { border-left: 3px solid #8b5cf6; padding: 1rem 1.25rem; color: #64748b; font-style: italic; margin: 1.5rem 0; background: rgba(139, 92, 246, .04); border-radius: 0 12px 12px 0; }
        .prose code { background: rgba(99, 102, 241, .08); color: #6366f1; padding: .2em .45em; border-radius: .35rem; font-size: .9em; font-weight: 500; }
        .prose pre { background: #0f172a; color: #e2e8f0; border-radius: .9rem; padding: 1.25rem; overflow-x: auto; margin-bottom: 1.5rem; }
        .prose pre code { background: transparent; color: inherit; padding: 0; }
        .prose img { border-radius: 1rem; margin: 1.5rem 0; max-width: 100%; box-shadow: 0 10px 40px rgba(99, 102, 241, .08); }
    </style>
@endsection

@section('content')
<article class="pt-32 pb-20 px-4 sm:px-6">
    <div class="max-w-3xl mx-auto">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-8">
            <a href="{{ route('blog.index') }}" class="hover:text-indigo-600 transition">Blog</a>
            <i class="fas fa-chevron-right text-xs text-slate-300"></i>
            <span class="text-slate-700">{{ $post->categoryLabel() }}</span>
        </nav>

        {{-- Meta --}}
        <div class="flex items-center gap-3 mb-6 flex-wrap">
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
            <span class="text-slate-500 text-sm">{{ $post->published_at->format('d M Y') }}</span>
            <span class="text-slate-400 text-sm">· {{ $post->reading_time }} min de lecture</span>
        </div>

        {{-- Titre --}}
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-6 leading-tight" style="letter-spacing:-.03em">
            {{ $post->title }}
        </h1>

        {{-- Excerpt --}}
        <p class="text-xl text-slate-600 mb-10 leading-relaxed border-l-4 border-indigo-300 pl-5">
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
        <div class="mt-16 glass-card glass-card-static p-8 text-center">
            <h3 class="text-2xl font-bold text-slate-900 mb-3">Prêt à simplifier votre gestion ?</h3>
            <p class="text-slate-500 mb-6">Pendant la phase de lancement, FRECORP est gratuit. Sans carte bancaire.</p>
            <a href="https://app.frecorp.fr/admin/register" class="btn-primary">
                Commencer gratuitement <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>

        {{-- Articles liés --}}
        @if($related->isNotEmpty())
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-slate-900 mb-8" style="letter-spacing:-.02em">Articles similaires</h2>
                <div class="grid sm:grid-cols-3 gap-4">
                    @foreach($related as $r)
                        <a href="{{ route('blog.show', $r) }}" class="soft-card p-5 group block">
                            <p class="text-xs text-indigo-600 font-semibold mb-2 uppercase tracking-wide">{{ $r->categoryLabel() }}</p>
                            <h4 class="text-sm font-bold text-slate-900 line-clamp-3">{{ $r->title }}</h4>
                            <p class="text-xs text-slate-400 mt-3">{{ $r->reading_time }} min · {{ $r->published_at->format('d/m/Y') }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</article>
@endsection
