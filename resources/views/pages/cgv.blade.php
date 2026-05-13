@extends('layouts.landing')

@section('title', 'Conditions Générales de Vente | FRECORP ERP')
@section('meta_description', 'Conditions Générales de Vente de FRECORP ERP - Tarifs, paiement, rétractation, résiliation et garanties.')

@section('content')
<section class="pt-32 pb-20 px-4 sm:px-6">
    <div class="max-w-4xl mx-auto">

        <nav class="mb-8 text-sm">
            <a href="{{ route('home') }}" class="text-slate-400 hover:text-indigo-600 transition">Accueil</a>
            <span class="mx-2 text-slate-300">/</span>
            <span class="text-slate-900">Conditions Générales de Vente</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl font-extrabold mb-8" style="letter-spacing:-.03em">
            <span class="gradient-text">Conditions Générales de Vente</span>
        </h1>

        <div class="glass-card glass-card-static p-8 lg:p-12 space-y-8">

            {{--
                ⚠️ MENTIONS À PERSONNALISER : remplacer __PRENOM_NOM__, __ADRESSE_COMPLETE__,
                __SIREN_OU_SIRET__, __STATUT_JURIDIQUE__ et __TVA__ par les informations réelles.
            --}}

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-file-contract text-indigo-600"></i>
                    Article 1 - Objet et champ d'application
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Les présentes Conditions Générales de Vente (CGV) régissent l'ensemble des prestations payantes fournies par <strong class="text-slate-900">FRECORP</strong> (__STATUT_JURIDIQUE__, __SIREN_OU_SIRET__, __ADRESSE_COMPLETE__), ci-après désigné « le Vendeur », à toute personne physique ou morale procédant à un achat via le site <a href="https://app.frecorp.fr" class="text-indigo-600 hover:underline">https://app.frecorp.fr</a>, ci-après désignée « le Client ».</p>
                    <p>Toute commande implique l'acceptation sans réserve des présentes CGV, qui prévalent sur tout autre document du Client.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-box text-indigo-600"></i>
                    Article 2 - Description du service
                </h2>
                <p class="text-slate-600">FRECORP est un service en ligne (SaaS) d'aide à la gestion d'entreprise comprenant des modules de Point de Vente, gestion de stock, facturation, achats, ressources humaines et comptabilité, accessible par abonnement après création d'un compte.</p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-tags text-indigo-600"></i>
                    Article 3 - Prix
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Les prix sont indiqués en euros, hors taxes (HT) et toutes taxes comprises (TTC) lorsque la TVA est applicable. La TVA appliquée est celle en vigueur au jour de la commande.</p>
                    <p><strong class="text-slate-900">Phase de lancement (bêta) :</strong> FRECORP est mis à disposition gratuitement pendant la phase de lancement, sans engagement et avec accès à l'ensemble des modules. Aucun moyen de paiement n'est exigé pour s'inscrire.</p>
                    <p><strong class="text-slate-900">Passage à la phase commerciale :</strong> les tarifs seront publiés sur la page Tarifs du site avant leur mise en application. Le Client est informé par email <strong class="text-slate-900">au moins 30 jours avant</strong> la mise en place des tarifs et doit alors confirmer expressément son souhait de poursuivre l'utilisation du service. À défaut de confirmation, le compte n'est pas facturé et l'accès au service peut être suspendu jusqu'à acceptation des nouvelles conditions tarifaires.</p>
                    <p><strong class="text-slate-900">Tarif préférentiel early adopter :</strong> les Clients ayant rejoint le service pendant la phase de lancement bénéficient d'un tarif préférentiel à vie, dont les conditions seront précisées dans l'email d'annonce des tarifs.</p>
                    <p>FRECORP se réserve le droit de modifier ses tarifs à tout moment ; les nouveaux tarifs ne s'appliqueront qu'aux abonnements souscrits ou renouvelés postérieurement à la modification, et après notification du Client au moins 30 jours avant prise d'effet.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-credit-card text-indigo-600"></i>
                    Article 4 - Modalités de paiement
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Le paiement s'effectue par carte bancaire ou prélèvement SEPA via un prestataire de paiement sécurisé (__PRESTATAIRE_PAIEMENT__). FRECORP ne stocke aucune donnée bancaire sur ses propres serveurs.</p>
                    <p>L'abonnement est facturé d'avance, mensuellement ou annuellement selon le choix du Client. Le renouvellement est automatique sauf résiliation préalable.</p>
                    <p><strong class="text-slate-900">Pénalités de retard :</strong> conformément à l'article L441-10 du Code de commerce, tout retard de paiement entraîne de plein droit une pénalité égale à trois fois le taux d'intérêt légal, ainsi qu'une indemnité forfaitaire de 40 € pour frais de recouvrement (uniquement pour les Clients professionnels).</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-rotate-left text-indigo-600"></i>
                    Article 5 - Droit de rétractation (consommateurs)
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Conformément à l'article L221-18 du Code de la consommation, le Client consommateur dispose d'un délai de <strong class="text-slate-900">14 jours</strong> à compter de la souscription pour exercer son droit de rétractation, sans avoir à justifier de motifs ni à payer de pénalités.</p>
                    <p>Pour exercer ce droit, le Client adresse une demande non équivoque à <a href="mailto:contact@frecorp.fr" class="text-indigo-600 hover:underline">contact@frecorp.fr</a>. Le remboursement intervient dans un délai de 14 jours par le même moyen de paiement.</p>
                    <p><strong class="text-slate-900">Renonciation :</strong> conformément à l'article L221-25, le Client peut renoncer expressément à son droit de rétractation pour bénéficier immédiatement du service. Dans ce cas, si le service est exécuté avant la fin du délai de rétractation, le Client devra payer un montant proportionnel à la prestation déjà fournie.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-door-open text-indigo-600"></i>
                    Article 6 - Durée et résiliation
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>L'abonnement est conclu pour une durée indéterminée, avec engagement minimum d'un mois (ou un an pour la formule annuelle).</p>
                    <p>Le Client peut résilier son abonnement à tout moment depuis son espace client. La résiliation prend effet à la fin de la période d'abonnement en cours ; aucun remboursement prorata temporis n'est dû, sauf disposition légale contraire.</p>
                    <p>Avant suppression définitive du compte, le Client dispose d'un délai de <strong class="text-slate-900">30 jours</strong> pour exporter ses données (factures, clients, comptabilité) au format CSV ou PDF, conformément au droit à la portabilité (article 20 RGPD).</p>
                    <p>FRECORP peut résilier le compte du Client en cas de manquement grave aux CGU ou aux CGV (fraude, non-paiement après mise en demeure restée infructueuse pendant 15 jours, utilisation détournée du service).</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-shield-check text-indigo-600"></i>
                    Article 7 - Garanties légales
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Conformément aux articles L217-3 et suivants du Code de la consommation, le Client consommateur bénéficie de la <strong class="text-slate-900">garantie légale de conformité</strong> et de la garantie contre les <strong class="text-slate-900">vices cachés</strong> (articles 1641 et suivants du Code civil).</p>
                    <p>Pour exercer ces garanties, le Client adresse sa demande motivée à <a href="mailto:contact@frecorp.fr" class="text-indigo-600 hover:underline">contact@frecorp.fr</a>. FRECORP s'engage à apporter une réponse dans un délai de 14 jours.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-server text-indigo-600"></i>
                    Article 8 - Disponibilité du service
                </h2>
                <p class="text-slate-600">FRECORP s'engage à fournir un service disponible 24h/24, 7j/7, avec un objectif de disponibilité annuel de 99,5 %, hors maintenance programmée annoncée 48 heures à l'avance et hors cas de force majeure (cyberattaque massive, panne d'opérateur, catastrophe naturelle).</p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-exclamation-triangle text-indigo-600"></i>
                    Article 9 - Limitation de responsabilité
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p><strong class="text-slate-900">Vis-à-vis des professionnels :</strong> la responsabilité totale de FRECORP est limitée au montant des sommes effectivement versées par le Client au cours des 12 derniers mois précédant le fait générateur, avec un minimum de 100 €. FRECORP n'est pas responsable des dommages indirects (pertes de données, manques à gagner, atteinte à l'image).</p>
                    <p><strong class="text-slate-900">Vis-à-vis des consommateurs :</strong> les présentes limitations ne font pas obstacle à la mise en œuvre des garanties légales et des dispositions impératives du Code de la consommation.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-handshake text-indigo-600"></i>
                    Article 10 - Médiation et règlement des litiges
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Conformément à l'article L612-1 du Code de la consommation, le Client consommateur peut, en cas de litige non résolu à l'amiable, recourir gratuitement au médiateur de la consommation suivant :</p>
                    <div class="bg-slate-50 rounded-xl p-4 mt-3">
                        <p><strong class="text-slate-900">__NOM_MEDIATEUR__</strong></p>
                        <p>__ADRESSE_MEDIATEUR__</p>
                        <p>Site : <a href="__URL_MEDIATEUR__" class="text-indigo-600 hover:underline">__URL_MEDIATEUR__</a></p>
                    </div>
                    <p>Le Client peut également recourir à la plateforme européenne de Règlement en Ligne des Litiges : <a href="https://ec.europa.eu/consumers/odr" class="text-indigo-600 hover:underline" target="_blank" rel="noopener">ec.europa.eu/consumers/odr</a></p>
                    <p>À défaut de résolution amiable, les litiges seront soumis aux tribunaux français compétents.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-gavel text-indigo-600"></i>
                    Article 11 - Droit applicable
                </h2>
                <p class="text-slate-600">Les présentes CGV sont soumises au droit français. La langue de référence est le français.</p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-envelope text-indigo-600"></i>
                    Article 12 - Contact
                </h2>
                <p class="text-slate-600">Pour toute question relative aux CGV : <a href="mailto:contact@frecorp.fr" class="text-indigo-600 hover:underline">contact@frecorp.fr</a></p>
            </section>

            <div class="pt-4 text-sm text-slate-400">
                <p><i class="fas fa-calendar mr-2"></i>Dernière mise à jour : 9 mai 2026</p>
            </div>
        </div>
    </div>
</section>
@endsection
