<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FRECORP ERP | L\'ERP qui lit vos factures à votre place')</title>
    <meta name="description" content="@yield('meta_description', 'FRECORP ERP : import IA de factures fournisseur, devis en ligne acceptés en 1 clic, Factur-X EN16931, multi-entrepôts, POS, RH et comptabilité. 1 mois gratuit.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    @yield('meta_extra')

    {{-- OG + Twitter Card (defaults via @hasSection, pages surchargeables) --}}
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
        <meta property="og:description" content="@yield('meta_description', 'FRECORP ERP : la solution ERP complète pour les entreprises modernes.')">
        <meta name="twitter:description" content="@yield('meta_description', 'FRECORP ERP : la solution ERP complète pour les entreprises modernes.')">
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
    @hasSection('og_type')
        <meta property="og:type" content="@yield('og_type')">
    @else
        <meta property="og:type" content="website">
    @endif
    <meta property="og:locale" content="fr_FR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="theme-color" content="#0f172a">

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .glass-card { background:rgba(255,255,255,0.03); backdrop-filter:blur(12px); border:1px solid rgba(255,255,255,0.1); box-shadow:0 8px 32px 0 rgba(0,0,0,0.37); }
        .glass-card-hover:hover { background:rgba(255,255,255,0.06); border-color:rgba(99,102,241,0.3); }
        .floating-orb { position:absolute; border-radius:50%; filter:blur(100px); z-index:0; opacity:.5; pointer-events:none; }
        .orb-1 { width:500px; height:500px; background:#4338ca; top:-150px; left:-150px; }
        .orb-2 { width:400px; height:400px; background:#7c3aed; bottom:10%; right:-100px; }
        .orb-3 { width:300px; height:300px; background:#06b6d4; top:50%; left:30%; }
        .gradient-text { background:linear-gradient(135deg,#6366f1 0%,#a855f7 50%,#ec4899 100%); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
        .btn-primary { background:linear-gradient(135deg,#6366f1 0%,#8b5cf6 100%); box-shadow:0 10px 40px -10px rgba(99,102,241,0.5); transition:all .3s ease; }
        .btn-primary:hover { transform:translateY(-2px); box-shadow:0 15px 50px -10px rgba(99,102,241,0.6); }
        .feature-icon { transition:all .3s ease; }
        .glass-card:hover .feature-icon { transform:scale(1.1) rotate(5deg); }
        details[open] summary i.fa-chevron-down { transform:rotate(180deg); }
        details summary i.fa-chevron-down { transition:transform .3s ease; }
        .nav-modern { background:linear-gradient(135deg,rgba(15,23,42,.9) 0%,rgba(30,41,59,.85) 100%); backdrop-filter:blur(20px); border-bottom:1px solid rgba(99,102,241,0.15); animation:navGlow 4s ease-in-out infinite; }
        @@keyframes navGlow { 0%,100%{box-shadow:0 4px 30px rgba(0,0,0,.3)} 50%{box-shadow:0 4px 40px rgba(99,102,241,.15)} }
        .nav-link { position:relative; padding:.5rem 1rem; border-radius:.5rem; transition:all .3s cubic-bezier(.4,0,.2,1); }
        .nav-link:hover { color:#fff; background:rgba(99,102,241,.1); }
        .btn-cta { position:relative; background:linear-gradient(135deg,#6366f1 0%,#8b5cf6 50%,#6366f1 100%); background-size:200% 100%; box-shadow:0 4px 20px rgba(99,102,241,.4); transition:all .4s cubic-bezier(.4,0,.2,1); overflow:hidden; }
        .btn-cta:hover { transform:translateY(-2px); box-shadow:0 8px 30px rgba(99,102,241,.5); }
        .btn-login { padding:.5rem 1.25rem; border-radius:.5rem; border:1px solid rgba(148,163,184,.2); transition:all .3s ease; }
        .btn-login:hover { border-color:rgba(99,102,241,.5); background:rgba(99,102,241,.1); color:#fff; }
        .mobile-menu-btn { width:44px; height:44px; border-radius:12px; background:rgba(99,102,241,.1); border:1px solid rgba(99,102,241,.2); transition:all .3s ease; }
        .mobile-menu { background:linear-gradient(180deg,rgba(15,23,42,.98) 0%,rgba(30,41,59,.95) 100%); backdrop-filter:blur(20px); border-top:1px solid rgba(99,102,241,.1); max-height:0; overflow-y:auto; overflow-x:hidden; transition:max-height .4s cubic-bezier(.4,0,.2,1), padding .3s ease; }
        .mobile-menu.open { max-height:calc(100vh - 5rem); padding-top:1rem; padding-bottom:1.5rem; }
        .mobile-link { display:flex; align-items:center; gap:.75rem; padding:.875rem 1rem; border-radius:.75rem; transition:all .3s ease; border:1px solid transparent; }
        .mobile-link:hover { background:rgba(99,102,241,.1); border-color:rgba(99,102,241,.2); transform:translateX(4px); }
        .mobile-link i { width:20px; text-align:center; color:#6366f1; }
    </style>
    @yield('styles')
</head>
<body class="font-sans bg-[#0f172a] text-slate-200 overflow-x-hidden min-h-screen">

    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
        <div class="floating-orb orb-3"></div>
    </div>

    <nav class="fixed top-0 w-full z-50 nav-modern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center group flex-shrink-0 ml-2 sm:ml-0 lg:mr-8">
                <img src="/images/logo.png" alt="FRECORP" class="w-auto object-contain" style="height:48px">
            </a>

            {{-- Nav desktop --}}
            <div class="hidden lg:flex items-center">
                <div class="flex items-center bg-slate-800/30 rounded-2xl p-1.5 border border-slate-700/50">
                    <a href="{{ route('home') }}#import-ia" class="nav-link text-sm font-medium text-violet-400 whitespace-nowrap"><i class="fas fa-brain mr-2 text-xs"></i>Import IA</a>
                    <a href="{{ route('home') }}#devis-en-ligne" class="nav-link text-sm font-medium text-emerald-400 whitespace-nowrap"><i class="fas fa-file-signature mr-2 text-xs"></i>Devis en ligne</a>
                    <a href="{{ route('home') }}#modules" class="nav-link text-sm font-medium text-slate-400 whitespace-nowrap"><i class="fas fa-cube mr-2 text-xs opacity-70"></i>Modules</a>
                    <a href="{{ route('home') }}#pricing" class="nav-link text-sm font-medium text-slate-400 whitespace-nowrap"><i class="fas fa-tag mr-2 text-xs opacity-70"></i>{{ __('nav.pricing') }}</a>
                    <a href="{{ route('blog.index') }}" class="nav-link text-sm font-medium text-slate-400 whitespace-nowrap"><i class="fas fa-pen-nib mr-2 text-xs opacity-70"></i>{{ __('nav.blog') }}</a>
                    <a href="https://app.frecorp.fr/convertir-facture" class="nav-link text-sm font-medium text-cyan-400 whitespace-nowrap"><i class="fas fa-wand-magic-sparkles mr-2 text-xs"></i>{{ __('nav.converter') }}</a>
                </div>
            </div>

            {{-- Actions --}}
            <div class="flex items-center gap-2 sm:gap-3 flex-shrink-0">
                {{-- Language switcher --}}
                <div class="hidden sm:flex items-center gap-1.5">
                    <a href="{{ route('locale.switch', 'fr') }}" class="text-sm font-medium {{ app()->getLocale() === 'fr' ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-500 hover:text-slate-700' }}">FR</a>
                    <span class="text-slate-300">|</span>
                    <a href="{{ route('locale.switch', 'en') }}" class="text-sm font-medium {{ app()->getLocale() === 'en' ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-500 hover:text-slate-700' }}">EN</a>
                </div>
                <a href="https://app.frecorp.fr/admin/login" class="btn-login hidden sm:flex items-center gap-2 text-slate-300 font-medium text-sm whitespace-nowrap">
                    <i class="fas fa-arrow-right-to-bracket text-xs"></i>
                    <span>{{ __('nav.login') }}</span>
                </a>
                <a href="https://app.frecorp.fr/admin/register" class="btn-cta text-white px-3 py-2 sm:px-5 sm:py-2.5 rounded-xl font-bold text-xs sm:text-sm flex items-center gap-2 whitespace-nowrap">
                    <i class="fas fa-rocket text-xs"></i>
                    <span class="hidden sm:inline">{{ __('nav.trial') }}</span>
                    <span class="sm:hidden">{{ __('nav.trial_short') }}</span>
                </a>
                <button id="mobile-menu-toggle" class="mobile-menu-btn lg:hidden flex items-center justify-center" aria-label="Menu" aria-expanded="false">
                    <i class="fas fa-bars text-lg text-indigo-400" id="menu-icon"></i>
                </button>
            </div>
        </div>

        {{-- Menu mobile --}}
        <div id="mobile-menu" class="mobile-menu lg:hidden absolute top-full left-0 right-0 px-4 sm:px-6">
            <div class="flex flex-col space-y-1">
                <a href="{{ route('home') }}#import-ia" class="mobile-link text-violet-400"><i class="fas fa-brain"></i><span>Import IA</span></a>
                <a href="{{ route('home') }}#devis-en-ligne" class="mobile-link text-emerald-400"><i class="fas fa-file-signature"></i><span>Devis en ligne</span></a>
                <a href="{{ route('home') }}#modules" class="mobile-link text-slate-300"><i class="fas fa-cube"></i><span>Modules</span></a>
                <a href="{{ route('home') }}#pricing" class="mobile-link text-slate-300"><i class="fas fa-tag"></i><span>{{ __('nav.pricing') }}</span></a>
                <a href="{{ route('blog.index') }}" class="mobile-link text-slate-300"><i class="fas fa-pen-nib"></i><span>{{ __('nav.blog') }}</span></a>
                <a href="https://app.frecorp.fr/convertir-facture" class="mobile-link text-slate-300"><i class="fas fa-wand-magic-sparkles"></i><span>{{ __('nav.converter') }}</span></a>
                <a href="{{ route('demo') }}" class="mobile-link text-slate-300"><i class="fas fa-play-circle"></i><span>{{ __('nav.demo') }}</span></a>
                <div class="border-t border-slate-700/50 my-3"></div>
                {{-- Mobile language switcher --}}
                <div class="flex items-center gap-2 px-1 py-2">
                    <a href="{{ route('locale.switch', 'fr') }}" class="text-sm font-medium {{ app()->getLocale() === 'fr' ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-500 hover:text-slate-700' }}">FR</a>
                    <span class="text-slate-300">|</span>
                    <a href="{{ route('locale.switch', 'en') }}" class="text-sm font-medium {{ app()->getLocale() === 'en' ? 'text-indigo-600 dark:text-indigo-400' : 'text-slate-500 hover:text-slate-700' }}">EN</a>
                </div>
                <div class="border-t border-slate-700/50 my-3"></div>
                <a href="https://app.frecorp.fr/admin/login" class="mobile-link text-slate-300"><i class="fas fa-arrow-right-to-bracket"></i><span>{{ __('nav.login') }}</span></a>
                <a href="https://app.frecorp.fr/admin/register" class="btn-cta text-white px-5 py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2 mt-2">
                    <i class="fas fa-rocket"></i><span>{{ __('nav.start_trial') }}</span>
                </a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-12 sm:py-16 border-t border-white/5 bg-slate-950/50 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid sm:grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            <div>
                <div class="flex items-center gap-2 mb-6">
                    <img src="/images/logo.png" alt="FRECORP" class="w-auto object-contain" style="height:64px">
                </div>
                <p class="text-slate-500 text-sm">L'ERP complet pour les entreprises modernes. Simplifiez votre gestion.</p>
            </div>
            <div>
                <h5 class="text-white font-bold mb-6">{{ __('footer.product') }}</h5>
                <ul class="text-slate-500 space-y-3 text-sm">
                    <li><a href="{{ route('home') }}#modules" class="hover:text-indigo-400 transition">Modules</a></li>
                    <li><a href="{{ route('home') }}#pricing" class="hover:text-indigo-400 transition">{{ __('nav.pricing') }}</a></li>
                    <li><a href="{{ route('demo') }}" class="hover:text-indigo-400 transition">{{ __('nav.demo') }}</a></li>
                    <li><a href="{{ route('roadmap') }}" class="hover:text-indigo-400 transition">Roadmap</a></li>
                    <li><a href="https://app.frecorp.fr/convertir-facture" class="hover:text-cyan-400 transition">Convertisseur Factur-X</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white font-bold mb-6">{{ __('footer.blog') }}</h5>
                <ul class="text-slate-500 space-y-3 text-sm">
                    <li><a href="{{ route('blog.index') }}?categorie=reform" class="hover:text-indigo-400 transition">{{ __('footer.reform') }}</a></li>
                    <li><a href="{{ route('blog.index') }}?categorie=facturation" class="hover:text-indigo-400 transition">{{ __('footer.billing') }}</a></li>
                    <li><a href="{{ route('blog.index') }}?categorie=tutorial" class="hover:text-indigo-400 transition">{{ __('footer.frecorp_tutorials') }}</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white font-bold mb-6">{{ __('footer.legal') }}</h5>
                <ul class="text-slate-500 space-y-3 text-sm">
                    <li><a href="{{ route('mentions-legales') }}" class="hover:text-indigo-400 transition">{{ __('footer.legal_notices') }}</a></li>
                    <li><a href="{{ route('cgu') }}" class="hover:text-indigo-400 transition">{{ __('footer.terms') }}</a></li>
                    <li><a href="{{ route('cgv') }}" class="hover:text-indigo-400 transition">{{ __('footer.sales_terms') }}</a></li>
                    <li><a href="{{ route('confidentialite') }}" class="hover:text-indigo-400 transition">{{ __('footer.privacy') }}</a></li>
                    <li><a href="{{ route('rgpd') }}" class="hover:text-indigo-400 transition">{{ __('footer.gdpr') }}</a></li>
                    <li><a href="#" data-cookie-settings class="hover:text-indigo-400 transition">{{ __('footer.cookies') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-8 sm:pt-12 mt-8 sm:mt-12 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-slate-600 text-xs sm:text-sm text-center md:text-left">© {{ date('Y') }} FRECORP. {{ __('footer.rights') }}. {{ __('footer.made_in') }}</p>
        </div>
    </footer>

    <script>
        // Mobile menu
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
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>

    @include('partials.cookie-banner')

    @yield('scripts')
</body>
</html>
