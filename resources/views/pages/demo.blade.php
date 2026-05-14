@extends('layouts.landing')

@section('title', 'Démo FRECORP ERP | Découvrez l\'interface en action')
@section('meta_description', 'Découvrez FRECORP ERP en action : vidéo de démonstration, screenshots de l\'interface et demandez une démo personnalisée gratuite.')
@section('og_title', 'Démo FRECORP ERP | Découvrez l\'interface en action')
@section('og_description', 'Vidéo de démo, screenshots et démo personnalisée gratuite de FRECORP ERP, le logiciel de gestion tout-en-un pour PME.')

@section('styles')
<style>
    .screenshot-card { transition: all .3s ease; }
    .screenshot-card:hover { transform: scale(1.02); }
    .video-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; }
    .video-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    .module-tab { transition: all .3s ease; }
    .module-tab.active { background: rgba(99,102,241,0.2); border-color: rgba(99,102,241,0.5); }
    .module-content { display: none; }
    .module-content.active { display: block; animation: fadeIn .3s ease; }
    @@keyframes fadeIn { from { opacity:0; transform: translateY(10px); } to { opacity:1; transform: translateY(0); } }
</style>
@endsection

@section('content')
    {{-- Hero --}}
    <section class="relative pt-32 pb-16 lg:pt-40 lg:pb-20 px-6">
        <div class="max-w-7xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 border border-indigo-200 text-indigo-600 text-sm font-bold mb-6">
                <i class="fas fa-play-circle"></i>
                <span>{{ __('demo.title') }}</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                <span class="text-slate-900">{{ __('demo.subtitle') }}</span>
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto mb-10">
                {{ __('demo.description') }}
            </p>
        </div>
    </section>

    {{-- Video --}}
    <section class="py-12 px-6">
        <div class="max-w-5xl mx-auto relative z-10">
            <div class="glass-card glass-card-static overflow-hidden">
                <div class="video-container bg-slate-100">
                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-gradient-to-br from-slate-100 to-slate-50">
                        <div class="w-24 h-24 bg-indigo-100 rounded-full flex items-center justify-center mb-6 cursor-pointer hover:bg-indigo-200 transition group">
                            <i class="fas fa-play text-indigo-600 text-3xl ml-1 group-hover:scale-110 transition"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">{{ __('demo.video_title') }}</h3>
                        <p class="text-slate-600">{{ __('demo.video_duration') }}</p>
                        <p class="text-slate-400 text-sm mt-4"><i class="fas fa-info-circle mr-2"></i>{{ __('demo.video_soon') }}</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                <div class="glass-card p-4 rounded-xl text-center">
                    <i class="fas fa-cash-register text-indigo-600 text-xl mb-2"></i>
                    <div class="text-sm font-semibold">{{ __('module.pos') }}</div>
                    <div class="text-xs text-slate-400">0:00 - 0:45</div>
                </div>
                <div class="glass-card p-4 rounded-xl text-center">
                    <i class="fas fa-boxes-stacked text-purple-400 text-xl mb-2"></i>
                    <div class="text-sm font-semibold">{{ __('module.stock') }}</div>
                    <div class="text-xs text-slate-400">0:45 - 1:30</div>
                </div>
                <div class="glass-card p-4 rounded-xl text-center">
                    <i class="fas fa-user-clock text-emerald-400 text-xl mb-2"></i>
                    <div class="text-sm font-semibold">{{ __('module.hr') }}</div>
                    <div class="text-xs text-slate-400">1:30 - 2:15</div>
                </div>
                <div class="glass-card p-4 rounded-xl text-center">
                    <i class="fas fa-chart-line text-orange-400 text-xl mb-2"></i>
                    <div class="text-sm font-semibold">{{ __('module.accounting') }}</div>
                    <div class="text-xs text-slate-400">2:15 - 3:00</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Screenshots Gallery --}}
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">{{ __('demo.screenshots_title') }}</h2>
                <p class="text-slate-600">{{ __('demo.screenshots_subtitle') }}</p>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <button class="module-tab active glass-card px-5 py-3 rounded-xl font-semibold text-sm" data-module="dashboard">
                    <i class="fas fa-chart-pie mr-2 text-indigo-600"></i>Dashboard
                </button>
                <button class="module-tab glass-card px-5 py-3 rounded-xl font-semibold text-sm" data-module="pos">
                    <i class="fas fa-cash-register mr-2 text-emerald-400"></i>{{ __('module.pos') }}
                </button>
                <button class="module-tab glass-card px-5 py-3 rounded-xl font-semibold text-sm" data-module="stock">
                    <i class="fas fa-boxes-stacked mr-2 text-purple-400"></i>{{ __('module.stock') }}
                </button>
                <button class="module-tab glass-card px-5 py-3 rounded-xl font-semibold text-sm" data-module="sales">
                    <i class="fas fa-file-invoice-dollar mr-2 text-orange-400"></i>{{ __('module.billing') }}
                </button>
                <button class="module-tab glass-card px-5 py-3 rounded-xl font-semibold text-sm" data-module="hr">
                    <i class="fas fa-user-clock mr-2 text-pink-400"></i>{{ __('module.hr') }}
                </button>
                <button class="module-tab glass-card px-5 py-3 rounded-xl font-semibold text-sm" data-module="accounting">
                    <i class="fas fa-calculator mr-2 text-cyan-400"></i>{{ __('module.accounting') }}
                </button>
            </div>

            <div id="screenshots-container">
                @foreach([
                    'dashboard' => [
                        ['Dashboard','Tableau de bord','Statistiques en temps réel, alertes et actions rapides'],
                        ['Dashboard','Centre de notifications','Toutes vos alertes importantes au même endroit'],
                    ],
                    'pos' => [
                        ['Point de Vente','Point de Vente tactile','Ajout produits, calcul automatique, multi-paiements'],
                        ['Point de Vente','Gestion des sessions','Fond de caisse, clôture et rapports journaliers'],
                    ],
                    'stock' => [
                        ['Stock','Gestion multi-entrepôts','Allées, rayons, étagères et emplacements'],
                        ['Stock','Transferts & Inventaires','Mouvements traçables et sessions d\'inventaire'],
                    ],
                    'sales' => [
                        ['Ventes','Devis & Factures','PDF personnalisés, envoi email, signature client'],
                        ['Ventes','Gestion clients','SIREN/SIRET, TVA intra, historique achats'],
                    ],
                    'hr' => [
                        ['RH','Pointage sécurisé','QR dynamique toutes les 30 secondes'],
                        ['RH','Plannings & Congés','Gestion des shifts et demandes de congés'],
                    ],
                    'accounting' => [
                        ['Comptabilité','Plan Comptable Général','Gestion des comptes, journaux et écritures comptables'],
                        ['Comptabilité','États Financiers','Balance générale, grand livre et journal d\'audit'],
                    ],
                ] as $key => $cards)
                <div class="module-content {{ $key === 'dashboard' ? 'active' : '' }}" data-module="{{ $key }}">
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($cards as $card)
                        <div class="screenshot-card glass-card rounded-2xl overflow-hidden">
                            <div class="aspect-video bg-gradient-to-br from-slate-100 to-slate-50 flex items-center justify-center">
                                <i class="fas fa-image text-slate-300 text-4xl"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold">{{ $card[1] }}</h4>
                                <p class="text-slate-600 text-sm">{{ $card[2] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Demo Request Form --}}
    <section id="contact" class="py-20 px-6">
        <div class="max-w-4xl mx-auto relative z-10">
            <div class="glass-card p-10 lg:p-16 rounded-3xl border-indigo-500/20">
                <div class="grid lg:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">{{ __('demo.form_title') }}</h2>
                        <p class="text-slate-600 mb-8">{{ __('demo.form_description') }}</p>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-indigo-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-video text-indigo-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">{{ __('demo.form_visio') }}</h4>
                                    <p class="text-slate-600 text-sm">{{ __('demo.form_visio_desc') }}</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-emerald-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-question-circle text-emerald-400"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">{{ __('demo.form_qa') }}</h4>
                                    <p class="text-slate-600 text-sm">{{ __('demo.form_qa_desc') }}</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-purple-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-gift text-purple-400"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">{{ __('demo.form_free') }}</h4>
                                    <p class="text-slate-600 text-sm">{{ __('demo.form_free_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <form id="demo-form" class="space-y-5" action="https://api.web3forms.com/submit" method="POST">
                            <input type="hidden" name="access_key" value="66c0ee8e-b05b-4bd7-960a-610fc222a6b9">
                            <input type="hidden" name="subject" value="🎯 Nouvelle demande de démo FRECORP">
                            <input type="hidden" name="from_name" value="FRECORP - Demande Démo">
                            <input type="checkbox" name="botcheck" class="hidden" style="display:none">
                            <input type="hidden" name="redirect" value="https://www.frecorp.fr/demo?success=true">

                            <div>
                                <label class="block text-sm font-semibold mb-2">{{ __('demo.form_name') }}</label>
                                <input type="text" name="nom" required class="w-full px-4 py-3 bg-white/5 border border-slate-200 rounded-xl focus:border-indigo-500 focus:outline-none transition" placeholder="Jean Dupont">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2">{{ __('demo.form_email') }}</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 bg-white/5 border border-slate-200 rounded-xl focus:border-indigo-500 focus:outline-none transition" placeholder="jean@entreprise.fr">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2">{{ __('demo.form_phone') }}</label>
                                <input type="tel" name="telephone" class="w-full px-4 py-3 bg-white/5 border border-slate-200 rounded-xl focus:border-indigo-500 focus:outline-none transition" placeholder="06 12 34 56 78">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2">{{ __('demo.form_company') }}</label>
                                <input type="text" name="entreprise" required class="w-full px-4 py-3 bg-white/5 border border-slate-200 rounded-xl focus:border-indigo-500 focus:outline-none transition" placeholder="Ma Société SARL">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2">{{ __('demo.form_industry') }}</label>
                                <select name="secteur" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:border-indigo-500 focus:outline-none transition text-slate-700">
                                    <option value="">Sélectionnez...</option>
                                    <option>{{ __('demo.form_industry_retail') }}</option>
                                    <option>{{ __('demo.form_industry_food') }}</option>
                                    <option>{{ __('demo.form_industry_services') }}</option>
                                    <option>{{ __('demo.form_industry_manufacturing') }}</option>
                                    <option>{{ __('demo.form_industry_logistics') }}</option>
                                    <option>{{ __('demo.form_industry_other') }}</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-2">{{ __('demo.form_employees') }}</label>
                                <select name="employes" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:border-indigo-500 focus:outline-none transition text-slate-700">
                                    <option value="">Sélectionnez...</option>
                                    <option>1 - 5</option>
                                    <option>6 - 20</option>
                                    <option>21 - 50</option>
                                    <option>Plus de 50</option>
                                </select>
                            </div>
                            <button type="submit" class="w-full btn-primary py-4 rounded-xl font-bold text-slate-900 flex items-center justify-center gap-2">
                                <span>{{ __('demo.form_submit') }}</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                            <p class="text-center text-slate-400 text-xs">
                                <i class="fas fa-lock mr-1"></i>{{ __('demo.form_privacy') }}
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div class="glass-card p-12 rounded-3xl bg-gradient-to-br from-indigo-900/30 to-purple-900/30 border-indigo-500/20">
                <h2 class="text-3xl font-bold mb-4">{{ __('demo.self_test_title') }}</h2>
                <p class="text-slate-600 mb-8">{{ __('demo.self_test_description') }}</p>
                <a href="https://app.frecorp.fr/admin/register" class="inline-flex items-center gap-2 bg-white text-slate-900 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-indigo-50 transition shadow-xl">
                    <span>{{ __('demo.self_test_cta') }}</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <p class="text-slate-400 text-sm mt-4"><i class="fas fa-credit-card mr-1"></i> {{ __('demo.self_test_note') }}</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Module tabs
    document.querySelectorAll('.module-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            const module = tab.dataset.module;
            document.querySelectorAll('.module-tab').forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            document.querySelectorAll('.module-content').forEach(c => {
                c.classList.toggle('active', c.dataset.module === module);
            });
        });
    });

    // Success banner on redirect back
    if (window.location.search.includes('success=true')) {
        const banner = document.createElement('div');
        banner.className = 'fixed top-24 left-1/2 transform -translate-x-1/2 z-50 bg-green-600 text-slate-900 px-8 py-4 rounded-2xl shadow-2xl flex items-center gap-3';
        banner.innerHTML = '<i class="fas fa-check-circle text-2xl"></i><div><strong>Demande envoyée !</strong><br><span class="text-sm">Notre équipe vous contactera sous 24h.</span></div>';
        document.body.appendChild(banner);
        setTimeout(() => { banner.style.transition='opacity .5s'; banner.style.opacity='0'; setTimeout(()=>banner.remove(),500); }, 5000);
        window.history.replaceState({}, document.title, window.location.pathname);
    }

    document.getElementById('demo-form').addEventListener('submit', function() {
        const btn = this.querySelector('button[type="submit"]');
        btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Envoi en cours...';
        btn.disabled = true;
    });
</script>
@endsection
