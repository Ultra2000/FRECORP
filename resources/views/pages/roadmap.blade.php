@extends('layouts.landing')

@section('title', 'Roadmap | FRECORP ERP - Évolution et Fonctionnalités à venir')
@section('meta_description', 'Découvrez la roadmap de FRECORP ERP : fonctionnalités en cours de développement, prochaines versions et idées futures. Restez informé de l\'évolution de votre ERP.')
@section('og_title', 'Roadmap FRECORP ERP | Fonctionnalités à venir')
@section('og_description', 'Suivez l\'évolution de FRECORP ERP : nouvelles fonctionnalités, améliorations planifiées et vision produit pour 2026-2028.')

@section('styles')
<style>
    .roadmap-card { background:#ffffff; border:1px solid #e2e8f0; border-radius:24px; box-shadow:0 1px 2px rgba(15,23,42,.04); transition:all .3s ease; }
    .roadmap-card:hover { border-color:rgba(99,102,241,.3); transform:translateY(-4px); box-shadow:0 10px 40px rgba(99,102,241,.12); }
    .status-in-progress { background:linear-gradient(135deg,#f59e0b 0%,#d97706 100%); }
    .status-planned { background:linear-gradient(135deg,#6366f1 0%,#8b5cf6 100%); }
    .status-idea { background:linear-gradient(135deg,#64748b 0%,#475569 100%); }
    .status-done { background:linear-gradient(135deg,#10b981 0%,#059669 100%); }
    .timeline-dot { width:12px; height:12px; border-radius:50%; position:relative; }
    .timeline-dot::after { content:''; position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:24px; height:24px; border-radius:50%; background:inherit; opacity:.2; }
</style>
@endsection

@section('content')
<section class="pt-32 pb-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">

        <nav class="mb-8 text-sm">
            <a href="{{ route('home') }}" class="text-slate-600 hover:text-indigo-600 transition">Accueil</a>
            <span class="mx-2 text-slate-600">/</span>
            <span class="text-slate-900">Roadmap</span>
        </nav>

        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 border border-indigo-200 mb-6">
                <i class="fas fa-road text-indigo-600"></i>
                <span class="text-indigo-300 text-sm font-medium">Feuille de route</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-6">
                <span class="gradient-text">Roadmap FRECORP</span>
            </h1>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto">
                Découvrez l'évolution de FRECORP ERP. Transparence totale sur les fonctionnalités en cours de développement et celles à venir.
            </p>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
            <div class="glass-card rounded-2xl p-4 text-center">
                <div class="text-3xl font-bold text-amber-400 mb-1">1</div>
                <div class="text-slate-600 text-sm">Prochainement</div>
            </div>
            <div class="glass-card rounded-2xl p-4 text-center">
                <div class="text-3xl font-bold text-indigo-600 mb-1">2</div>
                <div class="text-slate-600 text-sm">Planifiées</div>
            </div>
            <div class="glass-card rounded-2xl p-4 text-center">
                <div class="text-3xl font-bold text-slate-600 mb-1">1</div>
                <div class="text-slate-600 text-sm">Vision</div>
            </div>
            <div class="glass-card rounded-2xl p-4 text-center">
                <div class="text-3xl font-bold text-emerald-400 mb-1">8</div>
                <div class="text-slate-600 text-sm">Terminées</div>
            </div>
        </div>

        {{-- Roadmap Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Été 2026 --}}
            <div>
                <div class="glass-card rounded-2xl p-4 mb-4 flex items-center gap-3">
                    <div class="timeline-dot status-in-progress"></div>
                    <div>
                        <h2 class="text-slate-900 font-bold">Été 2026</h2>
                        <p class="text-xs text-slate-400">Prochainement</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="roadmap-card rounded-xl p-5">
                        <div class="mb-3"><span class="status-in-progress text-slate-900 text-xs font-bold px-2 py-1 rounded-full">Prochainement</span></div>
                        <h3 class="text-slate-900 font-semibold text-lg mb-3">Rapprochement Bancaire</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600">
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-amber-400 mt-1 text-xs shrink-0"></i><span>Import de relevés bancaires CSV et OFX</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-amber-400 mt-1 text-xs shrink-0"></i><span>Rapprochement automatique des transactions avec les règlements</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-amber-400 mt-1 text-xs shrink-0"></i><span>Suggestions intelligentes de correspondances</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-amber-400 mt-1 text-xs shrink-0"></i><span>Validation et génération automatique des écritures comptables</span></li>
                        </ul>
                        <div class="flex items-center gap-2 mt-4 text-xs text-slate-400"><i class="fas fa-building-columns"></i><span>Module Comptabilité</span></div>
                    </div>
                </div>
            </div>

            {{-- 2nd sem. 2026 --}}
            <div>
                <div class="glass-card rounded-2xl p-4 mb-4 flex items-center gap-3">
                    <div class="timeline-dot status-planned"></div>
                    <div>
                        <h2 class="text-slate-900 font-bold">2nd sem. 2026</h2>
                        <p class="text-xs text-slate-400">Planifié</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="roadmap-card rounded-xl p-5">
                        <div class="mb-3"><span class="status-planned text-slate-900 text-xs font-bold px-2 py-1 rounded-full">Planifié</span></div>
                        <h3 class="text-slate-900 font-semibold text-lg mb-3">Clôture & Ouverture Comptable</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600">
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Clôture automatique de l'exercice avec calcul du résultat net</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Génération automatique des écritures d'à-nouveaux (journal AN)</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Verrouillage des écritures de l'exercice clos</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Bilan et compte de résultat de clôture en PDF</span></li>
                        </ul>
                        <div class="flex items-center gap-2 mt-4 text-xs text-slate-400"><i class="fas fa-calculator"></i><span>Module Comptabilité</span></div>
                    </div>
                </div>
            </div>

            {{-- 2027 --}}
            <div>
                <div class="glass-card rounded-2xl p-4 mb-4 flex items-center gap-3">
                    <div class="timeline-dot status-planned"></div>
                    <div>
                        <h2 class="text-slate-900 font-bold">2027</h2>
                        <p class="text-xs text-slate-400">Planifié</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="roadmap-card rounded-xl p-5">
                        <div class="mb-3"><span class="status-planned text-slate-900 text-xs font-bold px-2 py-1 rounded-full">Planifié</span></div>
                        <h3 class="text-slate-900 font-semibold text-lg mb-3">Intégration URSSAF</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600">
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Déclarations de cotisations sociales via API URSSAF</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Calcul automatique des charges patronales et salariales</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Synchronisation avec le module paie et RH existant</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-indigo-600 mt-1 text-xs shrink-0"></i><span>Tableaux de bord des obligations sociales</span></li>
                        </ul>
                        <div class="flex items-center gap-2 mt-4 text-xs text-slate-400"><i class="fas fa-landmark"></i><span>Module RH & Paie</span></div>
                    </div>
                </div>
            </div>

            {{-- 2027-2028 --}}
            <div>
                <div class="glass-card rounded-2xl p-4 mb-4 flex items-center gap-3">
                    <div class="timeline-dot status-idea"></div>
                    <div>
                        <h2 class="text-slate-900 font-bold">2027-2028</h2>
                        <p class="text-xs text-slate-400">Vision</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="roadmap-card rounded-xl p-5">
                        <div class="mb-3"><span class="status-idea text-slate-900 text-xs font-bold px-2 py-1 rounded-full">Vision</span></div>
                        <h3 class="text-slate-900 font-semibold text-lg mb-3">Assistant IA via MCP</h3>
                        <ul class="space-y-2.5 text-sm text-slate-600">
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-slate-400 mt-1 text-xs shrink-0"></i><span>Connexion d'une IA directement à votre ERP via Model Context Protocol</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-slate-400 mt-1 text-xs shrink-0"></i><span>Automatisation des opérations comptables par commande naturelle</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-slate-400 mt-1 text-xs shrink-0"></i><span>Génération de rapports et analyses en langage naturel</span></li>
                            <li class="flex items-start gap-2"><i class="fas fa-arrow-right text-slate-400 mt-1 text-xs shrink-0"></i><span>Mode validation humaine avant toute opération critique</span></li>
                        </ul>
                        <div class="flex items-center gap-2 mt-4 text-xs text-slate-400"><i class="fas fa-robot"></i><span>Intelligence artificielle</span></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Récemment terminé --}}
        <div class="mt-16">
            <div class="flex items-center gap-3 mb-8">
                <div class="timeline-dot status-done"></div>
                <h2 class="text-2xl font-bold text-slate-900">Récemment terminé</h2>
                <span class="text-emerald-400 text-sm font-medium bg-emerald-500/10 px-3 py-1 rounded-full">✓ Disponible</span>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach([
                    ['Chorus Pro','Facturation électronique conforme pour le secteur public.'],
                    ['Module RH','Gestion des employés, congés et présences.'],
                    ['Caisse tactile','Point de vente intuitif avec gestion des tickets.'],
                    ['Export comptable','Export FEC et formats compatibles experts-comptables.'],
                    ['Gestion des stocks','Inventaire, mouvements et alertes de réapprovisionnement.'],
                    ['Tableau de bord','Dashboard interactif avec KPIs en temps réel.'],
                    ['Multi-entreprises','Gérez plusieurs sociétés depuis un seul compte.'],
                    ['Codes-barres','Génération et scan de codes-barres pour les produits.'],
                ] as $item)
                <div class="roadmap-card rounded-xl p-4 border-emerald-500/20">
                    <div class="flex items-center gap-2 mb-2">
                        <i class="fas fa-check-circle text-emerald-400"></i>
                        <h3 class="text-slate-900 font-semibold">{{ $item[0] }}</h3>
                    </div>
                    <p class="text-slate-600 text-sm">{{ $item[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Suggestion --}}
        <div class="mt-16">
            <div class="glass-card rounded-3xl p-8 lg:p-12 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-slate-900 text-2xl"></i>
                </div>
                <h2 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-4">Une idée de fonctionnalité ?</h2>
                <p class="text-slate-600 mb-8 max-w-xl mx-auto">Nous construisons FRECORP avec vous. Partagez vos idées et suggestions pour améliorer l'application.</p>
                <a href="mailto:contact@frecorp.fr?subject=Suggestion%20de%20fonctionnalité" class="btn-primary text-slate-900 px-8 py-4 rounded-xl font-bold inline-flex items-center gap-3">
                    <i class="fas fa-paper-plane"></i>
                    Proposer une idée
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
