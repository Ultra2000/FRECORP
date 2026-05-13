@extends('layouts.landing')

@section('title', 'RGPD - Protection des Données | FRECORP ERP')
@section('meta_description', 'Conformité RGPD de FRECORP ERP - Vos droits, nos engagements et comment nous protégeons vos données personnelles.')

@section('content')
<section class="pt-32 pb-20 px-4 sm:px-6">
    <div class="max-w-4xl mx-auto">

        <nav class="mb-8 text-sm">
            <a href="{{ route('home') }}" class="text-slate-400 hover:text-indigo-600 transition">Accueil</a>
            <span class="mx-2 text-slate-300">/</span>
            <span class="text-slate-900">RGPD</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl font-extrabold mb-8" style="letter-spacing:-.03em">
            <span class="gradient-text">RGPD</span>
            <span class="text-slate-900 block text-2xl mt-2 font-normal">Règlement Général sur la Protection des Données</span>
        </h1>

        <div class="flex flex-wrap gap-4 mb-12">
            <div class="glass-card glass-card-static px-6 py-4 flex items-center gap-4">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-xl flex items-center justify-center">
                    <i class="fas fa-shield-check text-emerald-600 text-2xl"></i>
                </div>
                <div>
                    <div class="text-slate-900 font-bold">Conforme RGPD</div>
                    <div class="text-slate-600 text-sm">Hébergement et traitements en France</div>
                </div>
            </div>
            <div class="glass-card glass-card-static px-6 py-4 flex items-center gap-4">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500/20 to-indigo-500/20 rounded-xl flex items-center justify-center">
                    <i class="fas fa-flag text-blue-600 text-2xl"></i>
                </div>
                <div>
                    <div class="text-slate-900 font-bold">Hébergement France</div>
                    <div class="text-slate-600 text-sm">O2switch - Clermont-Ferrand</div>
                </div>
            </div>
        </div>

        <div class="glass-card glass-card-static p-8 lg:p-12 space-y-8">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-info-circle text-indigo-600"></i>
                    Qu'est-ce que le RGPD ?
                </h2>
                <p class="text-slate-600">
                    Le Règlement Général sur la Protection des Données (RGPD) est un règlement européen entré en vigueur le 25 mai 2018. Il renforce et unifie la protection des données personnelles des citoyens de l'Union Européenne. FRECORP est pleinement conforme à ce règlement.
                </p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-building text-indigo-600"></i>
                    FRECORP en tant que Responsable de Traitement
                </h2>
                <div class="text-slate-600 space-y-4">
                    <p>Dans le cadre de la fourniture de notre service ERP, FRECORP agit en tant que :</p>
                    <div class="grid md:grid-cols-2 gap-4 mt-4">
                        <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-5">
                            <h4 class="text-slate-900 font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-user-tie text-indigo-600"></i>
                                Responsable de Traitement
                            </h4>
                            <p class="text-sm">Pour vos données de compte (email, nom, informations de connexion)</p>
                        </div>
                        <div class="bg-violet-50 border border-violet-200 rounded-xl p-5">
                            <h4 class="text-slate-900 font-bold mb-2 flex items-center gap-2">
                                <i class="fas fa-cogs text-violet-600"></i>
                                Sous-traitant
                            </h4>
                            <p class="text-sm">Pour vos données commerciales (clients, ventes, employés de votre entreprise)</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-file-signature text-indigo-600"></i>
                    Base légale des traitements
                </h2>
                <div class="text-slate-600 space-y-4">
                    <p>Nos traitements de données reposent sur les bases légales suivantes :</p>
                    <div class="space-y-3">
                        <div class="bg-slate-50 rounded-xl p-4 flex items-start gap-4">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-file-contract text-emerald-600"></i>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-semibold">Exécution du contrat</h4>
                                <p class="text-sm">Fourniture du service ERP, gestion de votre compte, support technique</p>
                            </div>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4 flex items-start gap-4">
                            <div class="w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-gavel text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-semibold">Obligation légale</h4>
                                <p class="text-sm">Conservation des logs de connexion, réponse aux autorités judiciaires</p>
                            </div>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4 flex items-start gap-4">
                            <div class="w-10 h-10 bg-violet-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-scale-balanced text-violet-600"></i>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-semibold">Intérêt légitime</h4>
                                <p class="text-sm">Amélioration du service, sécurité de la plateforme, statistiques anonymisées</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-user-shield text-indigo-600"></i>
                    Vos droits RGPD
                </h2>
                <div class="text-slate-600 space-y-4">
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
                        <div class="bg-slate-50 rounded-xl p-5">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-indigo-50 rounded-lg flex items-center justify-center">
                                    <i class="fas {{ $icon }} text-indigo-600"></i>
                                </div>
                                <h4 class="text-slate-900 font-bold">{{ $title }}</h4>
                            </div>
                            <p class="text-sm">{{ $desc }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-paper-plane text-indigo-600"></i>
                    Comment exercer vos droits ?
                </h2>
                <div class="text-slate-600 space-y-4">
                    <p>Pour exercer l'un de ces droits, vous pouvez :</p>
                    <div class="bg-indigo-50 border border-indigo-200 rounded-2xl p-6">
                        <div class="flex flex-col md:flex-row md:items-center gap-6">
                            <div class="flex-1">
                                <h4 class="text-slate-900 font-bold mb-2">Nous contacter par email</h4>
                                <p class="text-sm mb-4">Envoyez votre demande avec une copie de pièce d'identité à :</p>
                                <a href="mailto:contact@frecorp.fr" class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-xl font-bold transition">
                                    <i class="fas fa-envelope"></i>
                                    contact@frecorp.fr
                                </a>
                            </div>
                            <div class="md:border-l md:border-slate-200 md:pl-6">
                                <p class="text-sm"><strong class="text-slate-900">Délai de réponse :</strong><br>Maximum 1 mois</p>
                                <p class="text-sm mt-2"><strong class="text-slate-900">Coût :</strong><br>Gratuit (sauf demandes abusives)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-globe-europe text-indigo-600"></i>
                    Transferts hors UE
                </h2>
                <div class="text-slate-600 space-y-3">
                    <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-5 flex items-start gap-4">
                        <i class="fas fa-check-circle text-emerald-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="text-slate-900 font-bold mb-2">Hébergement en France</h4>
                            <p>Vos données commerciales et de compte sont stockées et traitées exclusivement sur des serveurs situés en France, chez notre hébergeur O2switch à Clermont-Ferrand.</p>
                            <p class="mt-3 text-sm">Si certains traitements ponctuels (lecture automatique de factures par IA, par exemple) nécessitent un sous-traitant hors UE, ils sont systématiquement encadrés par les <strong class="text-slate-900">Clauses Contractuelles Types (CCT)</strong> de la Commission européenne et listés dans la section « Sous-traitants » ci-dessus. Aucun transfert ne se fait sans cadre juridique approprié.</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-handshake text-indigo-600"></i>
                    Liste des sous-traitants
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Pour fournir notre service, nous faisons appel aux sous-traitants suivants, tous soumis à des clauses contractuelles RGPD :</p>
                    <div class="overflow-x-auto bg-slate-50 rounded-xl p-4 mt-4">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="text-slate-900 border-b border-slate-200">
                                    <th class="text-left py-2 px-2">Sous-traitant</th>
                                    <th class="text-left py-2 px-2">Finalité</th>
                                    <th class="text-left py-2 px-2">Localisation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-white/5">
                                    <td class="py-2 px-2"><strong class="text-slate-900">O2switch</strong></td>
                                    <td class="py-2 px-2">Hébergement web et base de données</td>
                                    <td class="py-2 px-2">🇫🇷 France (Clermont-Ferrand)</td>
                                </tr>
                                <tr class="border-b border-white/5">
                                    <td class="py-2 px-2"><strong class="text-slate-900">Resend</strong></td>
                                    <td class="py-2 px-2">Envoi d'emails transactionnels (confirmation d'inscription, newsletter, notifications)</td>
                                    <td class="py-2 px-2">🇺🇸 États-Unis, encadré par les Clauses Contractuelles Types (CCT) de la Commission européenne</td>
                                </tr>
                                <tr class="border-b border-white/5">
                                    <td class="py-2 px-2"><strong class="text-slate-900">Anthropic (Claude)</strong></td>
                                    <td class="py-2 px-2">Lecture automatique des factures par IA (extraction des données structurées)</td>
                                    <td class="py-2 px-2">🇺🇸 États-Unis, CCT, aucune donnée utilisée pour l'entraînement</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-2"><strong class="text-slate-900">Google (Gemini)</strong></td>
                                    <td class="py-2 px-2">Lecture automatique des factures (fallback IA si Claude indisponible)</td>
                                    <td class="py-2 px-2">🇺🇸 États-Unis, CCT, aucune donnée utilisée pour l'entraînement</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-sm mt-4">La liste est mise à jour à chaque ajout/modification de sous-traitant. Vous pouvez nous contacter pour obtenir la liste complète à jour ainsi qu'une copie des accords de sous-traitance.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-clock text-indigo-600"></i>
                    Durée de conservation des données
                </h2>
                <div class="text-slate-600 space-y-3">
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li><strong class="text-slate-900">Données de compte (email, nom) :</strong> pendant toute la durée d'utilisation du service, puis 3 ans après la dernière connexion (prospection commerciale).</li>
                        <li><strong class="text-slate-900">Données commerciales (factures, ventes, comptabilité) :</strong> 10 ans à compter de la clôture de l'exercice (article L123-22 du Code de commerce).</li>
                        <li><strong class="text-slate-900">Logs de connexion :</strong> 12 mois (article L34-1 du CPCE).</li>
                        <li><strong class="text-slate-900">Données de support :</strong> 2 ans après la résolution du ticket.</li>
                        <li><strong class="text-slate-900">Inscription newsletter :</strong> tant que vous restez inscrit ; 30 jours de suppression logique après désinscription, puis effacement définitif.</li>
                        <li><strong class="text-slate-900">Fichiers convertis (convertisseur public) :</strong> 24 heures maximum, suppression automatique après ce délai.</li>
                        <li><strong class="text-slate-900">Cookies et données techniques :</strong> durée de la session ou maximum 13 mois.</li>
                    </ul>
                    <p class="mt-4">À l'issue de ces durées, les données sont soit supprimées, soit anonymisées de manière irréversible.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-user-shield text-indigo-600"></i>
                    Contact RGPD / Référent Données
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>FRECORP n'a pas l'obligation légale de désigner un Délégué à la Protection des Données (DPO), conformément à l'article 37 du RGPD. Toutefois, un référent dédié aux questions de protection des données est joignable :</p>
                    <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-5 mt-4">
                        <p><strong class="text-slate-900">Email dédié :</strong> <a href="mailto:rgpd@frecorp.fr" class="text-indigo-600 hover:underline">rgpd@frecorp.fr</a></p>
                        <p class="text-sm mt-2">Pour toute demande relative à vos droits, transferts de données, ou questions de conformité.</p>
                    </div>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-bell text-indigo-600"></i>
                    Notification de violation
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>En cas de violation de données susceptible d'engendrer un risque élevé pour vos droits et libertés, nous nous engageons à :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Notifier la CNIL dans les <strong class="text-slate-900">72 heures</strong> suivant la découverte</li>
                        <li>Vous informer <strong class="text-slate-900">dans les meilleurs délais</strong> de la nature de la violation</li>
                        <li>Mettre en œuvre les mesures correctives nécessaires</li>
                    </ul>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-landmark text-indigo-600"></i>
                    Autorité de contrôle
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Si vous estimez que le traitement de vos données personnelles constitue une violation du RGPD, vous avez le droit d'introduire une réclamation auprès de la CNIL :</p>
                    <div class="bg-slate-50 rounded-xl p-5 mt-4">
                        <p><strong class="text-slate-900">CNIL - Commission Nationale de l'Informatique et des Libertés</strong></p>
                        <p class="mt-2">3 Place de Fontenoy - TSA 80715</p>
                        <p>75334 Paris Cedex 07</p>
                        <p class="mt-2"><a href="https://www.cnil.fr" class="text-indigo-600 hover:underline" target="_blank" rel="noopener">www.cnil.fr</a></p>
                    </div>
                </div>
            </section>

            <div class="pt-4 text-sm text-slate-400">
                <p><i class="fas fa-calendar mr-2"></i>Dernière mise à jour : 9 mai 2026</p>
            </div>
        </div>
    </div>
</section>
@endsection
