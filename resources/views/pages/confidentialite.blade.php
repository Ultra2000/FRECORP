@extends('layouts.app')

@section('title', 'Politique de Confidentialité | FRECORP ERP')
@section('meta_description', 'Politique de confidentialité de FRECORP ERP - Comment nous protégeons vos données personnelles et professionnelles.')

@section('content')
<main class="pt-32 pb-20 px-6">
    <div class="max-w-4xl mx-auto relative z-10">

        <nav class="mb-8 text-sm">
            <a href="{{ route('home') }}" class="text-slate-400 hover:text-indigo-400 transition">Accueil</a>
            <span class="mx-2 text-slate-600">/</span>
            <span class="text-white">Politique de Confidentialité</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl font-extrabold mb-8">
            <span class="gradient-text">Politique de Confidentialité</span>
        </h1>

        <div class="glass-card rounded-3xl p-8 lg:p-12 space-y-8">

            <div class="bg-indigo-500/10 border border-indigo-500/30 rounded-2xl p-6">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-indigo-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-shield-check text-indigo-400 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg mb-2">Notre engagement</h3>
                        <p class="text-slate-400">Chez FRECORP, la protection de vos données est notre priorité. Vos données commerciales restent votre propriété exclusive et ne sont jamais vendues ou partagées à des fins publicitaires.</p>
                    </div>
                </div>
            </div>

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-database text-indigo-400"></i>
                    1. Données collectées
                </h2>
                <div class="text-slate-400 space-y-4">
                    <p>Nous collectons les données suivantes dans le cadre de l'utilisation de notre service :</p>
                    <div class="bg-slate-800/50 rounded-xl p-4">
                        <h4 class="text-white font-semibold mb-2">Données d'identification :</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Nom, prénom, adresse email</li>
                            <li>Numéro de téléphone (optionnel)</li>
                            <li>Nom de l'entreprise</li>
                        </ul>
                    </div>
                    <div class="bg-slate-800/50 rounded-xl p-4">
                        <h4 class="text-white font-semibold mb-2">Données commerciales :</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Informations clients et fournisseurs</li>
                            <li>Produits, stocks, ventes, achats</li>
                            <li>Factures et documents comptables</li>
                            <li>Données employés (si module RH activé)</li>
                        </ul>
                    </div>
                    <div class="bg-slate-800/50 rounded-xl p-4">
                        <h4 class="text-white font-semibold mb-2">Données techniques :</h4>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li>Adresse IP, type de navigateur</li>
                            <li>Logs de connexion (pour la sécurité)</li>
                            <li>Cookies essentiels au fonctionnement</li>
                        </ul>
                    </div>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-bullseye text-indigo-400"></i>
                    2. Finalités du traitement
                </h2>
                <div class="text-slate-400 space-y-3">
                    <p>Vos données sont utilisées exclusivement pour :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li><strong class="text-white">Fournir le service</strong> - Permettre l'utilisation de l'ERP et de ses fonctionnalités</li>
                        <li><strong class="text-white">Améliorer le service</strong> - Analyser l'usage pour optimiser l'expérience</li>
                        <li><strong class="text-white">Communication</strong> - Envoyer des notifications importantes (mises à jour, sécurité)</li>
                        <li><strong class="text-white">Support technique</strong> - Répondre à vos demandes d'assistance</li>
                        <li><strong class="text-white">Obligations légales</strong> - Se conformer aux exigences réglementaires</li>
                    </ul>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-lock text-indigo-400"></i>
                    3. Sécurité des données
                </h2>
                <div class="text-slate-400 space-y-3">
                    <p>Nous mettons en œuvre des mesures de sécurité robustes :</p>
                    <div class="grid sm:grid-cols-2 gap-4 mt-4">
                        <div class="bg-slate-800/50 rounded-xl p-4 flex items-start gap-3">
                            <i class="fas fa-key text-green-400 mt-1"></i>
                            <div>
                                <h4 class="text-white font-semibold">Chiffrement</h4>
                                <p class="text-sm">TLS 1.3 pour toutes les communications, chiffrement AES-256 au repos</p>
                            </div>
                        </div>
                        <div class="bg-slate-800/50 rounded-xl p-4 flex items-start gap-3">
                            <i class="fas fa-server text-green-400 mt-1"></i>
                            <div>
                                <h4 class="text-white font-semibold">Hébergement</h4>
                                <p class="text-sm">Serveurs en France chez O2switch, certifiés ISO 27001</p>
                            </div>
                        </div>
                        <div class="bg-slate-800/50 rounded-xl p-4 flex items-start gap-3">
                            <i class="fas fa-clock-rotate-left text-green-400 mt-1"></i>
                            <div>
                                <h4 class="text-white font-semibold">Sauvegardes</h4>
                                <p class="text-sm">Sauvegardes quotidiennes automatiques avec rétention 30 jours</p>
                            </div>
                        </div>
                        <div class="bg-slate-800/50 rounded-xl p-4 flex items-start gap-3">
                            <i class="fas fa-user-shield text-green-400 mt-1"></i>
                            <div>
                                <h4 class="text-white font-semibold">Accès restreint</h4>
                                <p class="text-sm">Principe du moindre privilège pour tous les accès internes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-share-nodes text-indigo-400"></i>
                    4. Partage des données
                </h2>
                <div class="text-slate-400 space-y-3">
                    <p><strong class="text-white">Nous ne vendons jamais vos données.</strong> Elles peuvent être partagées uniquement avec :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li><strong class="text-white">Sous-traitants techniques</strong> — Hébergeur (O2switch), service d'envoi d'emails, service d'intelligence artificielle pour la lecture automatique des factures (la liste détaillée et à jour figure sur la page <a href="{{ route('rgpd') }}" class="text-indigo-400 hover:underline">RGPD</a>).</li>
                        <li><strong class="text-white">Autorités compétentes</strong> — Si requis par la loi ou une décision de justice.</li>
                    </ul>
                    <p class="mt-4">Tous nos sous-traitants sont soumis à des clauses contractuelles de protection des données conformes au RGPD. Les éventuels transferts hors UE sont encadrés par les Clauses Contractuelles Types de la Commission européenne.</p>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-clock text-indigo-400"></i>
                    5. Durée de conservation
                </h2>
                <div class="text-slate-400 space-y-3">
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li><strong class="text-white">Données de compte</strong> - Conservées pendant toute la durée d'utilisation du service + 3 ans après suppression</li>
                        <li><strong class="text-white">Données commerciales</strong> - Selon vos obligations légales (10 ans pour documents comptables)</li>
                        <li><strong class="text-white">Logs de connexion</strong> - 12 mois (obligation légale)</li>
                        <li><strong class="text-white">Données de support</strong> - 2 ans après résolution du ticket</li>
                    </ul>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-cookie text-indigo-400"></i>
                    6. Cookies
                </h2>
                <div class="text-slate-400 space-y-3">
                    <p>Nous utilisons uniquement des cookies essentiels au fonctionnement :</p>
                    <div class="bg-slate-800/50 rounded-xl p-4 mt-4">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="text-white border-b border-white/10">
                                    <th class="text-left py-2">Cookie</th>
                                    <th class="text-left py-2">Finalité</th>
                                    <th class="text-left py-2">Durée</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-white/5"><td class="py-2">session</td><td class="py-2">Authentification</td><td class="py-2">Session</td></tr>
                                <tr class="border-b border-white/5"><td class="py-2">csrf_token</td><td class="py-2">Sécurité</td><td class="py-2">Session</td></tr>
                                <tr><td class="py-2">remember_token</td><td class="py-2">Connexion persistante</td><td class="py-2">30 jours</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-4">Aucun cookie publicitaire ou de tracking tiers n'est utilisé.</p>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-user-check text-indigo-400"></i>
                    7. Vos droits
                </h2>
                <div class="text-slate-400 space-y-3">
                    <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                    <div class="grid sm:grid-cols-2 gap-3 mt-4">
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center gap-3"><i class="fas fa-eye text-indigo-400"></i><span><strong class="text-white">Accès</strong> - Consulter vos données</span></div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center gap-3"><i class="fas fa-pen text-indigo-400"></i><span><strong class="text-white">Rectification</strong> - Corriger vos données</span></div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center gap-3"><i class="fas fa-trash text-indigo-400"></i><span><strong class="text-white">Effacement</strong> - Supprimer vos données</span></div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center gap-3"><i class="fas fa-download text-indigo-400"></i><span><strong class="text-white">Portabilité</strong> - Exporter vos données</span></div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center gap-3"><i class="fas fa-ban text-indigo-400"></i><span><strong class="text-white">Opposition</strong> - Refuser certains traitements</span></div>
                        <div class="bg-slate-800/50 rounded-lg p-3 flex items-center gap-3"><i class="fas fa-pause text-indigo-400"></i><span><strong class="text-white">Limitation</strong> - Restreindre le traitement</span></div>
                    </div>
                    <p class="mt-4">Pour exercer ces droits : <a href="mailto:contact@frecorp.fr" class="text-indigo-400 hover:underline">contact@frecorp.fr</a></p>
                </div>
            </section>

            <hr class="border-white/10">

            <section>
                <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                    <i class="fas fa-envelope text-indigo-400"></i>
                    8. Contact
                </h2>
                <div class="text-slate-400">
                    <p>Pour toute question sur cette politique ou pour exercer vos droits :</p>
                    <p class="mt-2"><strong class="text-white">Email général :</strong> <a href="mailto:contact@frecorp.fr" class="text-indigo-400 hover:underline">contact@frecorp.fr</a></p>
                    <p class="mt-1"><strong class="text-white">Email RGPD dédié :</strong> <a href="mailto:rgpd@frecorp.fr" class="text-indigo-400 hover:underline">rgpd@frecorp.fr</a></p>
                    <p class="mt-4">Vous pouvez également adresser une réclamation à la CNIL : <a href="https://www.cnil.fr" class="text-indigo-400 hover:underline" target="_blank" rel="noopener">www.cnil.fr</a></p>
                </div>
            </section>

            <div class="pt-4 text-sm text-slate-500">
                <p><i class="fas fa-calendar mr-2"></i>Dernière mise à jour : 9 mai 2026</p>
            </div>
        </div>
    </div>
</main>
@endsection
