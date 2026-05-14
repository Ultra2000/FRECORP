<!DOCTYPE html>
<html lang="fr" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FRECORP ERP | L\'ERP nouvelle génération pour PME françaises')</title>
    <meta name="description" content="@yield('meta_description', 'FRECORP : l\'ERP nouvelle génération pour PME françaises. Import IA de factures, Factur-X EN16931, devis en ligne, multi-entrepôts, POS, RH, comptabilité.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    @yield('meta_extra')

    {{-- Open Graph + Twitter Card --}}
    <meta property="og:site_name" content="FRECORP ERP">
    <meta property="og:url" content="{{ url()->current() }}">
    @hasSection('og_title')
        <meta property="og:title" content="@yield('og_title')">
        <meta name="twitter:title" content="@yield('og_title')">
    @else
        <meta property="og:title" content="@yield('title', 'FRECORP ERP')">
        <meta name="twitter:title" content="@yield('title', 'FRECORP ERP')">
    @endif
    @hasSection('og_description')
        <meta property="og:description" content="@yield('og_description')">
        <meta name="twitter:description" content="@yield('og_description')">
    @else
        <meta property="og:description" content="@yield('meta_description', 'FRECORP ERP : la solution ERP nouvelle génération.')">
        <meta name="twitter:description" content="@yield('meta_description', 'FRECORP ERP : la solution ERP nouvelle génération.')">
    @endif
    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
        <meta name="twitter:image" content="@yield('og_image')">
    @else
        <meta property="og:image" content="{{ asset('images/logo.png') }}">
        <meta name="twitter:image" content="{{ asset('images/logo.png') }}">
    @endif
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:locale" content="fr_FR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="theme-color" content="#f8f8ff">

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --bg: #f8f8ff;
            --bg-card: #ffffff;
            --text-primary: #0f172a;
            --text-secondary: #64748b;
            --indigo: #6366f1;
            --violet: #8b5cf6;
            --border-soft: #e2e8f0;
            --glow: 0 10px 40px rgba(99,102,241,.15);
        }

        body {
            font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif;
            background: var(--bg);
            color: var(--text-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Background subtil avec touches violettes */
        .bg-aurora {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background:
                radial-gradient(ellipse 80% 60% at 20% 0%, rgba(99,102,241,.08), transparent 50%),
                radial-gradient(ellipse 60% 50% at 80% 10%, rgba(139,92,246,.08), transparent 50%),
                radial-gradient(ellipse 70% 60% at 50% 100%, rgba(99,102,241,.05), transparent 50%);
        }

        /* Typographie */
        .h-hero {
            font-size: clamp(1.55rem, 4.5vw, 3.5rem);
            font-weight: 900;
            letter-spacing: -0.035em;
            line-height: 1.08;
        }
        .h-section {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            letter-spacing: -0.025em;
            line-height: 1.1;
        }
        .text-body {
            font-size: 1.125rem;
            line-height: 1.7;
            color: var(--text-secondary);
        }

        /* Gradient officiel */
        .gradient-text {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        }

        /* Glass card light */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 28px;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .04), 0 10px 40px rgba(99, 102, 241, .06);
            transition: transform .3s ease, box-shadow .3s ease;
        }
        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 1px 2px rgba(15, 23, 42, .04), 0 20px 60px rgba(99, 102, 241, .12);
        }
        .glass-card-static { transition: none; }
        .glass-card-static:hover { transform: none; }

        /* Soft card (sans glassmorphism) */
        .soft-card {
            background: #ffffff;
            border: 1px solid var(--border-soft);
            border-radius: 24px;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .04);
            transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
        }
        .soft-card:hover {
            transform: translateY(-4px);
            border-color: rgba(99, 102, 241, .25);
            box-shadow: var(--glow);
        }

        /* Boutons */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            height: 58px;
            padding: 0 28px;
            border-radius: 16px;
            font-weight: 600;
            font-size: 1rem;
            box-shadow: 0 10px 40px rgba(99, 102, 241, .25);
            transition: transform .3s ease, box-shadow .3s ease;
            white-space: nowrap;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 50px rgba(99, 102, 241, .35);
        }
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
            background: white;
            color: var(--text-primary);
            height: 58px;
            padding: 0 28px;
            border-radius: 16px;
            font-weight: 600;
            font-size: 1rem;
            border: 1px solid var(--border-soft);
            transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
            white-space: nowrap;
        }
        .btn-secondary:hover {
            transform: translateY(-2px);
            border-color: var(--indigo);
            box-shadow: 0 10px 30px rgba(99, 102, 241, .12);
        }
        .btn-sm { height: 44px; padding: 0 20px; font-size: .9rem; border-radius: 12px; }

        /* Navbar */
        .nav-modern {
            background: rgba(248, 248, 255, .8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(226, 232, 240, .6);
        }
        .nav-link {
            position: relative;
            padding: .5rem 1rem;
            border-radius: 10px;
            font-weight: 500;
            color: var(--text-secondary);
            transition: all .2s ease;
        }
        .nav-link:hover { color: var(--text-primary); background: rgba(99, 102, 241, .06); }

        /* Mobile menu */
        .mobile-menu-btn {
            width: 44px; height: 44px; border-radius: 12px;
            background: white;
            border: 1px solid var(--border-soft);
            color: var(--indigo);
            transition: all .2s ease;
        }
        .mobile-menu-btn:hover { border-color: var(--indigo); }
        .mobile-menu {
            background: rgba(255, 255, 255, .98);
            backdrop-filter: blur(20px);
            border-top: 1px solid var(--border-soft);
            max-height: 0;
            overflow-y: auto;
            overflow-x: hidden;
            transition: max-height .4s cubic-bezier(.4,0,.2,1), padding .3s ease;
        }
        .mobile-menu.open {
            max-height: calc(100vh - 5rem);
            padding-top: 1rem;
            padding-bottom: 1.5rem;
        }
        .mobile-link {
            display: flex;
            align-items: center;
            gap: .75rem;
            padding: .875rem 1rem;
            border-radius: 12px;
            color: var(--text-primary);
            transition: all .2s ease;
        }
        .mobile-link:hover { background: rgba(99, 102, 241, .06); }
        .mobile-link i { width: 20px; text-align: center; color: var(--indigo); }

        /* Pill / Badge */
        .pill {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .375rem .875rem;
            background: rgba(99, 102, 241, .08);
            border: 1px solid rgba(99, 102, 241, .15);
            border-radius: 9999px;
            font-size: .8125rem;
            font-weight: 600;
            color: var(--indigo);
        }

        /* Floating */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-12px); }
        }
        .float-slow { animation: float-slow 6s ease-in-out infinite; }

        /* Marquee infini */
        @keyframes marquee-left {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        @keyframes marquee-right {
            from { transform: translateX(-50%); }
            to { transform: translateX(0); }
        }
        .marquee-left  { animation: marquee-left  30s linear infinite; }
        .marquee-right { animation: marquee-right 30s linear infinite; }
        .marquee-mask  { mask-image: linear-gradient(to right, transparent, black 12%, black 88%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 12%, black 88%, transparent); }

        /* Fade in on scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity .8s ease, transform .8s ease;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Détails (FAQ etc.) */
        details[open] summary i.fa-chevron-down { transform: rotate(180deg); }
        details summary i.fa-chevron-down { transition: transform .3s ease; }
        details summary { list-style: none; }
        details summary::-webkit-details-marker { display: none; }
    </style>
    @yield('styles')
</head>
<body class="overflow-x-hidden min-h-screen">

    <div class="bg-aurora"></div>

    {{-- Navbar --}}
    <nav class="fixed top-0 w-full z-50 nav-modern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center flex-shrink-0">
                <img src="/images/logo.png" alt="FRECORP" class="w-auto object-contain" style="height:42px">
            </a>

            {{-- Nav desktop --}}
            <div class="hidden lg:flex items-center gap-1">
                <a href="{{ route('home') }}#fonctionnalites" class="nav-link text-sm">Fonctionnalités</a>
                <a href="{{ route('home') }}#flux-ia" class="nav-link text-sm">IA</a>
                <a href="{{ route('home') }}#pricing" class="nav-link text-sm">Tarifs</a>
                <a href="{{ route('blog.index') }}" class="nav-link text-sm">Blog</a>
                <a href="https://app.frecorp.fr/convertir-facture" class="nav-link text-sm">Convertisseur</a>
            </div>

            {{-- Actions --}}
            <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                <a href="https://app.frecorp.fr/admin/login" class="hidden sm:inline-flex nav-link text-sm font-medium">
                    Connexion
                </a>
                <a href="https://app.frecorp.fr/admin/register" class="btn-primary btn-sm">
                    <span class="hidden sm:inline">Essai gratuit</span>
                    <span class="sm:hidden">Essai</span>
                </a>
                <button id="mobile-menu-toggle" class="mobile-menu-btn lg:hidden flex items-center justify-center" aria-label="Menu" aria-expanded="false">
                    <i class="fas fa-bars text-base" id="menu-icon"></i>
                </button>
            </div>
        </div>

        {{-- Menu mobile --}}
        <div id="mobile-menu" class="mobile-menu lg:hidden absolute top-full left-0 right-0 px-4 sm:px-6">
            <div class="flex flex-col space-y-1">
                <a href="{{ route('home') }}#fonctionnalites" class="mobile-link"><i class="fas fa-cube"></i><span>Fonctionnalités</span></a>
                <a href="{{ route('home') }}#flux-ia" class="mobile-link"><i class="fas fa-bolt"></i><span>IA</span></a>
                <a href="{{ route('home') }}#pricing" class="mobile-link"><i class="fas fa-tag"></i><span>Tarifs</span></a>
                <a href="{{ route('blog.index') }}" class="mobile-link"><i class="fas fa-pen-nib"></i><span>Blog</span></a>
                <a href="https://app.frecorp.fr/convertir-facture" class="mobile-link"><i class="fas fa-wand-magic-sparkles"></i><span>Convertisseur</span></a>
                <div class="h-px bg-slate-200 my-3"></div>
                <a href="https://app.frecorp.fr/admin/login" class="mobile-link"><i class="fas fa-arrow-right-to-bracket"></i><span>Connexion</span></a>
                <a href="https://app.frecorp.fr/admin/register" class="btn-primary btn-sm mt-2 justify-center">
                    Démarrer l'essai gratuit
                </a>
            </div>
        </div>
    </nav>

    <main class="relative z-10">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="relative z-10 py-16 border-t border-slate-200/80 bg-white/50 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid sm:grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            <div>
                <div class="flex items-center mb-6">
                    <img src="/images/logo.png" alt="FRECORP" class="w-auto object-contain" style="height:38px">
                </div>
                <p class="text-slate-500 text-sm leading-relaxed">L'ERP nouvelle génération pour PME françaises. Simple, moderne, IA-native.</p>
            </div>
            <div>
                <h5 class="text-slate-900 font-semibold mb-5 text-sm">Produit</h5>
                <ul class="space-y-3 text-sm text-slate-500">
                    <li><a href="{{ route('home') }}#fonctionnalites" class="hover:text-indigo-600 transition">Fonctionnalités</a></li>
                    <li><a href="{{ route('home') }}#pricing" class="hover:text-indigo-600 transition">Tarifs</a></li>
                    <li><a href="{{ route('demo') }}" class="hover:text-indigo-600 transition">Démo</a></li>
                    <li><a href="{{ route('roadmap') }}" class="hover:text-indigo-600 transition">Roadmap</a></li>
                    <li><a href="https://app.frecorp.fr/convertir-facture" class="hover:text-indigo-600 transition">Convertisseur Factur-X</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-slate-900 font-semibold mb-5 text-sm">Ressources</h5>
                <ul class="space-y-3 text-sm text-slate-500">
                    <li><a href="{{ route('blog.index') }}" class="hover:text-indigo-600 transition">Blog</a></li>
                    <li><a href="{{ route('blog.index') }}?categorie=reform" class="hover:text-indigo-600 transition">Réforme Factur-X</a></li>
                    <li><a href="{{ route('blog.index') }}?categorie=tutorial" class="hover:text-indigo-600 transition">Tutoriels</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-slate-900 font-semibold mb-5 text-sm">Légal</h5>
                <ul class="space-y-3 text-sm text-slate-500">
                    <li><a href="{{ route('mentions-legales') }}" class="hover:text-indigo-600 transition">Mentions légales</a></li>
                    <li><a href="{{ route('cgu') }}" class="hover:text-indigo-600 transition">CGU</a></li>
                    <li><a href="{{ route('cgv') }}" class="hover:text-indigo-600 transition">CGV</a></li>
                    <li><a href="{{ route('confidentialite') }}" class="hover:text-indigo-600 transition">Confidentialité</a></li>
                    <li><a href="{{ route('rgpd') }}" class="hover:text-indigo-600 transition">RGPD</a></li>
                    <li><a href="#" data-cookie-settings class="hover:text-indigo-600 transition">Gérer mes cookies</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-12 mt-12 border-t border-slate-200/80 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-slate-400 text-xs sm:text-sm text-center md:text-left">© {{ date('Y') }} FRECORP. Tous droits réservés. Made with ❤️ in France 🇫🇷</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        mobileMenuToggle?.addEventListener('click', function() {
            const isOpen = mobileMenu.classList.toggle('open');
            menuIcon.classList.toggle('fa-bars');
            menuIcon.classList.toggle('fa-xmark');
            mobileMenuToggle.setAttribute('aria-expanded', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                menuIcon.classList.add('fa-bars');
                menuIcon.classList.remove('fa-xmark');
                mobileMenuToggle?.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Fade-in on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
    </script>

    @include('partials.cookie-banner')

    @yield('scripts')
</body>
</html>
