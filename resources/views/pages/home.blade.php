@extends('layouts.landing')

@section('title', 'FRECORP ERP | L\'ERP nouvelle génération pour PME françaises')
@section('meta_description', 'FRECORP : ERP nouvelle génération pour PME. Import IA de factures, Factur-X 2026, devis en ligne, multi-entrepôts, POS, RH, comptabilité. 1 mois gratuit.')

@section('og_title', 'FRECORP ERP | L\'ERP nouvelle génération pour PME')
@section('og_description', 'Import IA, Factur-X 2026, devis en ligne acceptés en 1 clic, POS, RH, comptabilité. Prêt pour la réforme 2026.')

@section('meta_extra')
<meta name="keywords" content="ERP PME, convertisseur factur-x, gestion de stock, logiciel caisse, Chorus Pro, FRECORP, facturation électronique 2026">
<meta name="google-site-verification" content="EhxeJ8oqh_KiG9WbAeyJhYh6W4XNe_52wZCa3c-ZMHU">
@verbatim
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"FRECORP ERP","applicationCategory":"BusinessApplication","operatingSystem":"Web Browser","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR"},"description":"Solution ERP nouvelle génération avec convertisseur Factur-X gratuit par IA."}
</script>
@endverbatim
@endsection

@section('content')

{{-- ═══════════════════════════════════════════════════════════════════════
     HERO — Bento grid asymétrique
══════════════════════════════════════════════════════════════════════════ --}}
<section class="relative pt-32 lg:pt-40 pb-20 lg:pb-28 px-4 sm:px-6 overflow-hidden">
    <div class="max-w-7xl mx-auto">

        <div class="grid grid-cols-1 lg:grid-cols-6 lg:grid-rows-[auto_auto_auto] gap-4 lg:gap-5">

            {{-- ═══════ CARD 1 : HEADLINE (grande, centrée) ═══════ --}}
            <div class="glass-card glass-card-static p-8 lg:p-14 lg:col-span-4 lg:row-span-2 flex flex-col items-center justify-center text-center fade-in">
                <h1 class="h-hero mb-6" style="text-wrap: balance">
                    L'ERP nouvelle génération
                    <span class="gradient-text block">pour PME françaises</span>
                </h1>
                <p class="text-body max-w-xl mb-10">
                    Stock, facturation, POS, RH, comptabilité. Une suite complète qui remplace vos vieux outils dispersés.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="https://app.frecorp.fr/admin/register" class="btn-primary">
                        Commencer gratuitement
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                    <a href="{{ route('demo') }}" class="btn-secondary">
                        <i class="fas fa-play text-indigo-500 text-sm"></i>
                        Voir la démo
                    </a>
                </div>
                <div class="mt-6 flex flex-wrap justify-center gap-x-5 gap-y-2 text-sm text-slate-500">
                    <span class="flex items-center gap-1.5"><i class="fas fa-check text-indigo-500 text-xs"></i>1 mois gratuit</span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-check text-indigo-500 text-xs"></i>Sans carte bancaire</span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-check text-indigo-500 text-xs"></i>🇫🇷 Hébergé en France</span>
                </div>
            </div>

            {{-- ═══════ CARD 2 : ILLUSTRATION (top right) ═══════ --}}
            <div class="glass-card glass-card-static lg:col-span-2 fade-in overflow-hidden relative p-0 flex items-center justify-center">
                <img src="/images/illustration1.png"
                     alt="Suite FRECORP ERP : modules connectés, IA et conformité"
                     class="w-full h-full object-cover">
            </div>

            {{-- ═══════ CARD 3 : BIG STAT (mid right) ═══════ --}}
            <div class="gradient-bg p-7 rounded-[28px] lg:col-span-2 text-white relative overflow-hidden fade-in">
                <div class="absolute -top-12 -right-12 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
                <div class="relative">
                    <div class="text-xs font-semibold uppercase tracking-widest text-white/70 mb-3">Gain moyen</div>
                    <div class="text-5xl lg:text-6xl font-black mb-2" style="letter-spacing:-.04em;line-height:.95">3h<span class="text-white/60">/sem</span></div>
                    <div class="text-sm text-white/80">économisées sur la saisie comptable</div>
                </div>
            </div>

            {{-- ═══════ CARD 4 : MARQUEE MODULES (bottom left) ═══════ --}}
            <div class="soft-card p-6 lg:col-span-2 fade-in overflow-hidden flex flex-col justify-center gap-3">
                @php
                    $marqueeModules = [
                        ['cash-register',     'Point de vente',  'indigo'],
                        ['boxes-stacked',     'Stock',           'violet'],
                        ['file-invoice',      'Facturation',     'indigo'],
                        ['truck-fast',        'Achats',          'violet'],
                        ['users',             'RH & Paie',       'indigo'],
                        ['calculator',        'Comptabilité',    'violet'],
                        ['file-export',       'Factur-X',        'indigo'],
                        ['file-signature',    'Devis',           'violet'],
                    ];
                @endphp

                {{-- Ligne 1 (scroll vers la gauche) --}}
                <div class="overflow-hidden marquee-mask">
                    <div class="flex gap-2.5 marquee-left w-max">
                        @foreach(array_merge($marqueeModules, $marqueeModules) as [$icon, $name, $color])
                            <div class="flex items-center gap-2 px-3.5 py-2 rounded-lg bg-white border border-slate-200/80 flex-shrink-0">
                                <i class="fas fa-{{ $icon }} text-{{ $color }}-500 text-xs"></i>
                                <span class="text-xs font-medium text-slate-700 whitespace-nowrap">{{ $name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Ligne 2 (scroll vers la droite) --}}
                <div class="overflow-hidden marquee-mask">
                    <div class="flex gap-2.5 marquee-right w-max">
                        @foreach(array_merge(array_reverse($marqueeModules), array_reverse($marqueeModules)) as [$icon, $name, $color])
                            <div class="flex items-center gap-2 px-3.5 py-2 rounded-lg bg-white border border-slate-200/80 flex-shrink-0">
                                <i class="fas fa-{{ $icon }} text-{{ $color }}-500 text-xs"></i>
                                <span class="text-xs font-medium text-slate-700 whitespace-nowrap">{{ $name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="text-center text-xs text-slate-400 mt-1">8 modules connectés en un seul outil</div>
            </div>

            {{-- ═══════ CARD 5 : ACTIVITÉ EN DIRECT (bottom 4 cols) ═══════ --}}
            <div class="glass-card glass-card-static p-7 lg:col-span-4 fade-in">
                <div class="flex items-center justify-between mb-5">
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-widest text-slate-400 mb-1">Aujourd'hui</div>
                        <div class="text-base font-bold text-slate-900">Votre business, en temps réel</div>
                    </div>
                    <span class="flex items-center gap-2 text-xs text-emerald-600 font-semibold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        En direct
                    </span>
                </div>

                <div class="grid sm:grid-cols-3 gap-3">
                    <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50/50 border border-slate-100">
                        <div class="w-9 h-9 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-sm"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="text-xs font-semibold text-slate-900 truncate">Devis #2384 accepté</div>
                            <div class="text-[11px] text-slate-400">il y a 4 min</div>
                        </div>
                        <div class="text-xs font-bold text-slate-700 flex-shrink-0">1 240€</div>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50/50 border border-slate-100">
                        <div class="w-9 h-9 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-file-invoice text-sm"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="text-xs font-semibold text-slate-900 truncate">Facture FR-0512</div>
                            <div class="text-[11px] text-slate-400">il y a 1 h</div>
                        </div>
                        <div class="text-xs font-bold text-slate-700 flex-shrink-0">3 980€</div>
                    </div>

                    <div class="flex items-center gap-3 p-3 rounded-xl bg-slate-50/50 border border-slate-100">
                        <div class="w-9 h-9 rounded-lg bg-violet-50 text-violet-600 flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-cart-shopping text-sm"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="text-xs font-semibold text-slate-900 truncate">12 ventes POS</div>
                            <div class="text-[11px] text-slate-400">aujourd'hui</div>
                        </div>
                        <div class="text-xs font-bold text-slate-700 flex-shrink-0">2 410€</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     LOGOS CLIENTS (sobre)
══════════════════════════════════════════════════════════════════════════ --}}
<section class="py-12 px-4 sm:px-6 border-y border-slate-200/80 bg-white/40 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto text-center fade-in">
        <p class="text-xs uppercase tracking-widest text-slate-400 font-semibold mb-8">Ils nous font confiance</p>
        <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-16 text-slate-400 text-xl font-semibold">
            <span class="opacity-60 hover:opacity-100 transition">ACME Corp</span>
            <span class="opacity-60 hover:opacity-100 transition">Boulangerie Léon</span>
            <span class="opacity-60 hover:opacity-100 transition">TechShop</span>
            <span class="opacity-60 hover:opacity-100 transition">Atelier Marais</span>
            <span class="opacity-60 hover:opacity-100 transition">Studio Cinq</span>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     FLUX IA
══════════════════════════════════════════════════════════════════════════ --}}
<section id="flux-ia" class="py-24 lg:py-32 px-4 sm:px-6 overflow-hidden">
    <div class="max-w-6xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
            <span class="pill mb-6">
                <i class="fas fa-bolt"></i>
                Intelligence artificielle
            </span>
            <h2 class="h-section mb-6">
                Vos factures lues, comprises,
                <span class="gradient-text">enregistrées</span>
            </h2>
            <p class="text-body">
                Glissez un PDF. Notre IA extrait les lignes, les montants, la TVA, le fournisseur. Une seule validation, et c'est dans votre comptabilité.
            </p>
        </div>

        <div class="relative fade-in -mx-4 sm:-mx-6 lg:-mx-16">
            <div class="relative" style="mask-image: linear-gradient(to bottom, transparent 0%, black 8%, black 85%, transparent 100%), linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%); mask-composite: intersect; -webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 8%, black 85%, transparent 100%), linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%); -webkit-mask-composite: source-in;">
                <img src="/images/illustration_Flux_IA.png"
                     alt="Flux automatisé par l'IA : capture, extraction, données structurées, mise à jour, résultat conforme EN16931"
                     class="w-full h-auto object-contain relative z-10"
                     style="mix-blend-mode: multiply;">
            </div>
            <div class="absolute -inset-12 -z-10 opacity-20 pointer-events-none">
                <div class="absolute inset-0 gradient-bg blur-3xl rounded-full"></div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     LE PRODUIT — Illustration centrale + cartes flottantes autour
══════════════════════════════════════════════════════════════════════════ --}}
<section class="py-24 lg:py-32 px-4 sm:px-6 overflow-hidden">
    <div class="max-w-7xl mx-auto">

        {{-- En-tête centré --}}
        <div class="text-center max-w-3xl mx-auto mb-14 fade-in">
            <span class="pill mb-6">
                <i class="fas fa-laptop"></i>
                Le produit
            </span>
            <h2 class="h-section mb-6">
                Tout votre business,
                <span class="gradient-text">en un coup d'œil</span>
            </h2>
            <p class="text-body">
                Un seul écran pour vos ventes, votre stock, vos factures et votre trésorerie. Accessible partout, optimisé mobile.
            </p>
        </div>

        {{-- Layout hub : image centre, cartes autour --}}
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_2.2fr_1fr] gap-6 lg:gap-8 items-center">

            {{-- Colonne gauche (cartes 1 & 2) --}}
            <div class="order-2 lg:order-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 lg:gap-6">
                <div class="soft-card p-5 fade-in">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="font-semibold text-slate-900 mb-1">Dashboard unifié</div>
                    <div class="text-sm text-slate-500 leading-relaxed">CA, marge, ventes, trésorerie : tout en temps réel.</div>
                </div>
                <div class="soft-card p-5 fade-in overflow-hidden">
                    <div class="w-10 h-10 rounded-xl bg-violet-50 border border-violet-100 flex items-center justify-center text-violet-600 mb-4">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="font-semibold text-slate-900 mb-3">Tous les métiers</div>
                    @php
                        $metiers = ['Boulangerie', 'Boutique', 'Café', 'Restaurant', 'Menuiserie', 'Atelier', 'Garage', 'Coiffeur', 'Agence', 'Cabinet', 'E-commerce', 'Artisan'];
                    @endphp
                    <div class="space-y-2 -mx-5">
                        {{-- Ligne 1 (scroll gauche) --}}
                        <div class="overflow-hidden marquee-mask">
                            <div class="flex gap-2 marquee-left w-max">
                                @foreach(array_merge($metiers, $metiers) as $metier)
                                    <span class="text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1.5 rounded-full whitespace-nowrap flex-shrink-0">{{ $metier }}</span>
                                @endforeach
                            </div>
                        </div>
                        {{-- Ligne 2 (scroll droite) --}}
                        <div class="overflow-hidden marquee-mask">
                            <div class="flex gap-2 marquee-right w-max">
                                @foreach(array_merge(array_reverse($metiers), array_reverse($metiers)) as $metier)
                                    <span class="text-xs font-medium text-slate-600 bg-white border border-slate-200 px-3 py-1.5 rounded-full whitespace-nowrap flex-shrink-0">{{ $metier }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Illustration centrale --}}
            <div class="order-1 lg:order-2 relative fade-in">
                <img src="/images/illlustration_workspace.png"
                     alt="Aperçu FRECORP ERP : dashboard, KPI, factures, automatisation IA"
                     class="w-full h-auto object-contain float-slow relative z-10">
                <div class="absolute -inset-8 -z-10 opacity-40 pointer-events-none">
                    <div class="absolute inset-0 gradient-bg blur-3xl rounded-full"></div>
                </div>
            </div>

            {{-- Colonne droite (cartes 3 & 4) --}}
            <div class="order-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 lg:gap-6">
                <div class="soft-card p-5 fade-in">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 mb-4">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="font-semibold text-slate-900 mb-1">Sync instantanée</div>
                    <div class="text-sm text-slate-500 leading-relaxed">Une vente, un stock à jour. Une facture, une écriture.</div>
                </div>
                <div class="soft-card p-5 fade-in">
                    <div class="w-10 h-10 rounded-xl bg-violet-50 border border-violet-100 flex items-center justify-center text-violet-600 mb-4">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <div class="font-semibold text-slate-900 mb-1">🇫🇷 Hébergé France</div>
                    <div class="text-sm text-slate-500 leading-relaxed">Chiffrement TLS, RGPD by design, sauvegardes quotidiennes.</div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     FONCTIONNALITÉS
══════════════════════════════════════════════════════════════════════════ --}}
<section id="fonctionnalites" class="py-24 lg:py-32 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-20 fade-in">
            <span class="pill mb-6">
                <i class="fas fa-cube"></i>
                Une suite complète
            </span>
            <h2 class="h-section mb-6">
                Tout ce qu'il faut.
                <span class="gradient-text block">Rien de plus.</span>
            </h2>
            <p class="text-body">
                Six modules conçus pour fonctionner ensemble. Activez ceux dont vous avez besoin, désactivez les autres.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $modules = [
                    ['cash-register',  'Point de Vente',  'POS connecté au stock en temps réel. Tactile, rapide, hors ligne.'],
                    ['boxes-stacked',  'Multi-Entrepôts', 'Stocks, inventaires, transferts. Codes-barres et seuils d\'alerte.'],
                    ['file-invoice',   'Facturation',     'Devis, factures, Factur-X EN16931. Acceptation client en 1 clic.'],
                    ['truck-fast',     'Achats',          'Commandes fournisseurs, réceptions, import IA des factures.'],
                    ['users',          'Ressources Humaines', 'Pointage QR code anti-fraude, congés, paie simplifiée.'],
                    ['calculator',     'Comptabilité',    'Plan comptable, écritures auto, balance, exports FEC.'],
                ];
            @endphp

            @foreach($modules as [$icon, $title, $desc])
                <div class="soft-card p-7 fade-in">
                    <div class="w-11 h-11 rounded-xl bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 mb-5">
                        <i class="fas fa-{{ $icon }}"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $title }}</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">{{ $desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     AVANT / APRÈS
══════════════════════════════════════════════════════════════════════════ --}}
<section class="py-24 lg:py-32 px-4 sm:px-6 overflow-hidden">
    <div class="max-w-6xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
            <h2 class="h-section mb-6">
                <span class="gradient-text">3 heures par semaine.</span>
                Voilà ce que vous récupérez.
            </h2>
            <p class="text-body">
                Du chaos papier au tableau de bord unifié. La même semaine de travail, deux mondes différents.
            </p>
        </div>

        <div class="relative fade-in -mx-4 sm:-mx-6 lg:-mx-16">
            <div class="relative" style="mask-image: linear-gradient(to bottom, transparent 0%, black 8%, black 85%, transparent 100%), linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%); mask-composite: intersect; -webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 8%, black 85%, transparent 100%), linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%); -webkit-mask-composite: source-in;">
                <img src="/images/avant_apres.png"
                     alt="Comparaison Avant FRECORP (saisie manuelle, fichiers dispersés) vs Après FRECORP (automatisation, données fiables, conformité 2026)"
                     class="w-full h-auto object-contain relative z-10"
                     style="mix-blend-mode: multiply;">
            </div>
            <div class="absolute -inset-12 -z-10 opacity-20 pointer-events-none">
                <div class="absolute inset-0 gradient-bg blur-3xl rounded-full"></div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════════════════
     TARIFS — Phase de lancement
══════════════════════════════════════════════════════════════════════════ --}}
<section id="pricing" class="py-24 lg:py-32 px-4 sm:px-6">
    <div class="max-w-5xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16 fade-in">
            <h2 class="h-section mb-6">
                <span class="gradient-text">Gratuit</span> pendant la phase de lancement
            </h2>
            <p class="text-body">
                Toute la suite FRECORP, sans coût et sans engagement.
                Les early adopters bénéficieront d'un tarif préférentiel à vie quand la grille tarifaire sera publiée.
            </p>
        </div>

        <div class="glass-card p-10 lg:p-14 text-center fade-in">
            <div class="pill mb-6">
                <i class="fas fa-rocket"></i>
                Programme early adopter
            </div>

            <div class="text-6xl lg:text-7xl font-black gradient-text mb-3" style="letter-spacing:-.04em;line-height:1">0€</div>
            <p class="text-lg text-slate-700 font-semibold mb-2">Utilisation illimitée pendant toute la bêta</p>
            <p class="text-sm text-slate-500 max-w-md mx-auto mb-10">
                Vous serez prévenu(e) par email <strong class="text-slate-700">au moins 30 jours avant</strong> la mise en place des tarifs. Aucun prélèvement automatique, aucune carte bancaire demandée.
            </p>

            <a href="https://app.frecorp.fr/admin/register" class="btn-primary inline-flex">
                Rejoindre la bêta
                <i class="fas fa-arrow-right text-sm"></i>
            </a>

            <div class="mt-12 grid grid-cols-2 sm:grid-cols-4 gap-6 text-left">
                <div class="flex items-start gap-2 text-sm">
                    <i class="fas fa-check text-indigo-500 mt-1"></i>
                    <span class="text-slate-600">Tous les modules</span>
                </div>
                <div class="flex items-start gap-2 text-sm">
                    <i class="fas fa-check text-indigo-500 mt-1"></i>
                    <span class="text-slate-600">Utilisateurs illimités</span>
                </div>
                <div class="flex items-start gap-2 text-sm">
                    <i class="fas fa-check text-indigo-500 mt-1"></i>
                    <span class="text-slate-600">Support par email</span>
                </div>
                <div class="flex items-start gap-2 text-sm">
                    <i class="fas fa-check text-indigo-500 mt-1"></i>
                    <span class="text-slate-600">Tarif préférentiel à vie</span>
                </div>
            </div>
        </div>

        <p class="text-center text-xs text-slate-400 mt-6">
            Pas d'engagement. Vous pouvez exporter toutes vos données et résilier à tout moment.
        </p>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════════════════
     BLOG TEASER
══════════════════════════════════════════════════════════════════════════ --}}
@if($latestPosts->count() > 0)
<section class="py-24 lg:py-32 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-6 mb-12 fade-in">
            <div>
                <h2 class="h-section mb-3">Le blog FRECORP</h2>
                <p class="text-body">Tout savoir sur Factur-X, la réforme 2026, et la gestion moderne.</p>
            </div>
            <a href="{{ route('blog.index') }}" class="btn-secondary btn-sm">
                Tous les articles
                <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach($latestPosts as $post)
                <a href="{{ route('blog.show', $post) }}" class="soft-card overflow-hidden fade-in block">
                    @if($post->featured_image)
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        </div>
                    @endif
                    <div class="p-6">
                        <span class="text-xs font-semibold text-indigo-500 uppercase tracking-wider">{{ $post->categoryLabel() }}</span>
                        <h3 class="text-lg font-bold text-slate-900 mt-3 mb-2 line-clamp-2">{{ $post->title }}</h3>
                        <p class="text-sm text-slate-500 line-clamp-2">{{ $post->excerpt }}</p>
                        <div class="text-xs text-slate-400 mt-4">{{ $post->published_at->format('d M Y') }} · {{ $post->reading_time }} min</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ═══════════════════════════════════════════════════════════════════════
     CTA FINAL
══════════════════════════════════════════════════════════════════════════ --}}
<section class="py-24 lg:py-32 px-4 sm:px-6">
    <div class="max-w-5xl mx-auto">
        <div class="gradient-bg rounded-[36px] p-12 lg:p-20 text-center text-white relative overflow-hidden fade-in">
            <div class="absolute inset-0 opacity-30">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-white/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-white/20 rounded-full blur-3xl"></div>
            </div>
            <div class="relative">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black mb-6" style="letter-spacing:-.03em;line-height:1">
                    Reprenez le contrôle.
                </h2>
                <p class="text-lg lg:text-xl text-white/80 max-w-2xl mx-auto mb-10">
                    Rejoignez les PME françaises qui ont arrêté de perdre du temps sur leurs factures.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://app.frecorp.fr/admin/register" class="btn-secondary" style="background:white;color:#0f172a">
                        Démarrer gratuitement
                        <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                    <a href="{{ route('demo') }}" class="inline-flex items-center justify-center gap-2 h-[58px] px-7 rounded-2xl font-semibold border border-white/30 text-white hover:bg-white/10 transition">
                        <i class="fas fa-play text-sm"></i>
                        Voir la démo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
