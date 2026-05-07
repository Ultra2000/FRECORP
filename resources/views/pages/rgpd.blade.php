@extends('layouts.app')

@section('title', 'RGPD - Protection des Données | FRECORP ERP')
@section('meta_description', 'Conformité RGPD de FRECORP ERP - Vos droits, nos engagements et comment nous protégeons vos données personnelles.')

@section('content')
<main class="pt-32 pb-20 px-6">
    <div class="max-w-4xl mx-auto relative z-10">

        <nav class="mb-8 text-sm">
            <a href="{{ route('home') }}" class="text-slate-400 hover:text-indigo-400 transition">Accueil</a>
            <span class="mx-2 text-slate-600">/</span>
            <span class="text-white">RGPD</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl font-extrabold mb-8">
            <span class="gradient-text">RGPD</span>
            <span class="text-white block text-2xl mt-2 font-normal">Règlement Général sur la Protection des Données</span>
        </h1>

        <div class="flex flex-wrap gap-4 mb-12">
            <div class="glass-card px-6 py-4 rounded-2xl flex items-center gap-4">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-xl flex items-center justify-center">
                    <i class="fas fa-shield-check text-green-400 text-2xl"></i>
                </div>
                <div>
                    <div class="text-white font-bold">Conforme RGPD</div>
                    <div class="text-slate-400 text-sm">Depuis mai 2018</div>
                </div>
            </div>
            <div class="glass-card px-6 py-4 rounded-2xl flex items-center gap-4">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-xl flex items-center justify-center">
                    <i class="fas fa-flag text-blue-400 text-2xl"></i>
                </div>
                <div>
                    <div class="text-white font-bold">Hébergement France</div>
                    <div class="text-slate-400 text-sm">O2switch - Clermont-Ferrand</div>
                </div>
            </div>
        </div>

        <div class="glass-card rounded-3xl p-8 lg:p-12 space-y-8">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-info-circle text-indigo-400"></i>
                    Qu'est-ce que le RGPD ?
                </h2>
                <p class="text-slate-400">
                    Le Règlement Général sur la Protection des Données (RGPD) est un règlement européen entré en vigueur le 25 mai 2018. Il renforce et unifie la protection des données personnelles des citoyens de l'Union Européenne. FRECORP est pleinement conforme à ce règlement.
                </p>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-building text-indigo-400"></i>
                    FRECORP en tant que Responsable de Traitement
                </h2>
                <div class="text-slate-400 space-y-4">
                    <p>Dans le cadre de la fourniture de notre service ERP, FRECORP agit en tant que :</p>
                    <div class="grid md:grid-cols-2 gap-4 mt-4">
                        <div class="bg-indigo-500/10 border border-indigo-500/30 rounded-xl p-5">
                            <h4 class="text-white font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-user-tie text-indigo-400"></i>
                                Responsable de Traitement
                            </h4>
                            <p class="text-sm">Pour vos données de compte (email, nom, informations de connexion)</p>
                        </div>
                        <div class="bg-purple-500/10 border border-purple-500/30 rounded-xl p-5">
                            <h4 class="text-white font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-cogs text-purple-400"></i>
                                Sous-traitant
                            </h4>
                            <p class="text-sm">Pour vos données commerciales (clients, ventes, employés de votre entreprise)</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-file-signature text-indigo-400"></i>
                    Base légale des traitements
                </h2>
                <div class="text-slate-400 space-y-4">
                    <p>Nos traitements de données reposent sur les bases légales suivantes :</p>
                    <div class="space-y-3">
                        <div class="bg-slate-800/50 rounded-xl p-4 flex items-start gap-4">
                            <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file-contract text-green-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Exécution du contrat</h4>
                                <p class="text-sm">Fourniture du service ERP, gestion de votre compte, support technique</p>
                            </div>
                        </div>
                        <div class="bg-slate-800/50 rounded-xl p-4 flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-gavel text-blue-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Obligation légale</h4>
                                <p class="text-sm">Conservation des logs de connexion, réponse aux autorités judiciaires</p>
                            </div>
                        </div>
                        <div class="bg-slate-800/50 rounded-xl p-4 flex items-start gap-4">
                            <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-scale-balanced text-purple-400"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold">Intérêt légitime</h4>
                                <p class="text-sm">Amélioration du service, sécurité de la plateforme, statistiques anonymisées</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-user-shield text-indigo-400"></i>
                    Vos droits RGPD
                </h2>
                <div class="text-slate-400 space-y-4">
                    <p>En tant qu'utilisateur européen, vous bénéficiez des droits suivants :</p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-4">
                        @foreach([
                            ['fa-eye','Droit d\'accès','Obtenir une copie de toutes les données personnelles que nous détenons sur vous.'],
                            ['fa-pen-to-square','Droit de rectification','Corriger des données inexactes ou incomplètes vous concernant.'],
                            ['fa-trash-can','Droit à l\'effacement','Demander la suppression de vos données personnelles (« droit à l\'oubli »).'],
                            ['fa-file-export','Droit à la portabilité','Recevoir vos données dans un format structuré et couramment utilisé.'],
                            ['fa-hand','Droit d\'opposition','Vous opposer à certains traitements basés sur l\'intérêt légitime.'],
                            ['fa-pause-circle','Droit à la limitation','Demander la suspension temporaire du traitement de vos données.'],
                        ] as [$icon, $title, $desc])
                        <div class="bg-slate-800/50 rounded-xl p-5">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-indigo-500/20 rounded-lg flex items-center justify-center">
                                    <i class="fas {{ $icon }} text-indigo-400"></i>
                                </div>
                                <h4 class="text-white font-bold">{{ $title }}</h4>
                            </div>
                            <p class="text-sm">{{ $desc }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-paper-plane text-indigo-400"></i>
                    Comment exercer vos droits ?
                </h2>
                <div class="text-slate-400 space-y-4">
                    <p>Pour exercer l'un de ces droits, vous pouvez :</p>
                    <div class="bg-indigo-500/10 border border-indigo-500/30 rounded-2xl p-6">
                        <div class="flex flex-col md:flex-row md:items-center gap-6">
                            <div class="flex-1">
                                <h4 class="text-white font-bold mb-2">Nous contacter par email</h4>
                                <p class="text-sm mb-4">Envoyez votre demande avec une copie de pièce d'identité à :</p>
                                <a href="mailto:contact@frecorp.fr" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl font-bold transition">
                                    <i class="fas fa-envelope"></i>
                                    contact@frecorp.fr
                                </a>
                            </div>
                            <div class="md:border-l md:border-white/10 md:pl-6">
                                <p class="text-sm"><strong class="text-white">Délai de réponse :</strong><br>Maximum 1 mois</p>
                                <p class="text-sm mt-2"><strong class="text-white">Coût :</strong><br>Gratuit (sauf demandes abusives)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-globe-europe text-indigo-400"></i>
                    Transferts hors UE
                </h2>
                <div class="text-slate-400 space-y-3">
                    <div class="bg-green-500/10 border border-green-500/30 rounded-xl p-5 flex items-start gap-4">
                        <i class="fas fa-check-circle text-green-400 text-xl mt-1"></i>
                        <div>
                            <h4 class="text-white font-bold mb-2">Aucun transfert hors UE</h4>
                            <p>Toutes vos données sont stockées et traitées exclusivement sur des serveurs situés en France, chez notre hébergeur O2switch à Clermont-Ferrand. Aucune donnée n'est transférée vers des pays tiers à l'Union Européenne.</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-bell text-indigo-400"></i>
                    Notification de violation
                </h2>
                <div class="text-slate-400 space-y-3">
                    <p>En cas de violation de données susceptible d'engendrer un risque élevé pour vos droits et libertés, nous nous engageons à :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Notifier la CNIL dans les <strong class="text-white">72 heures</strong> suivant la découverte</li>
                        <li>Vous informer <strong class="text-white">dans les meilleurs délais</strong> de la nature de la violation</li>
                        <li>Mettre en œuvre les mesures correctives nécessaires</li>
                    </ul>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-landmark text-indigo-400"></i>
                    Autorité de contrôle
                </h2>
                <div class="text-slate-400 space-y-3">
                    <p>Si vous estimez que le traitement de vos données personnelles constitue une violation du RGPD, vous avez le droit d'introduire une réclamation auprès de la CNIL :</p>
                    <div class="bg-slate-800/50 rounded-xl p-5 mt-4">
                        <p><strong class="text-white">CNIL - Commission Nationale de l'Informatique et des Libertés</strong></p>
                        <p class="mt-2">3 Place de Fontenoy - TSA 80715</p>
                        <p>75334 Paris Cedex 07</p>
                        <p class="mt-2"><a href="https://www.cnil.fr" class="text-indigo-400 hover:underline" target="_blank" rel="noopener">www.cnil.fr</a></p>
                    </div>
                </div>
            </section>

            <div class="pt-4 text-sm text-slate-500">
                <p><i class="fas fa-calendar mr-2"></i>Dernière mise à jour : 6 février 2026</p>
            </div>
        </div>
    </div>
</main>
@endsection
