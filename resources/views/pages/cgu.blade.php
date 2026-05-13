@extends('layouts.landing')

@section('title', 'Conditions Générales d\'Utilisation | FRECORP ERP')
@section('meta_description', 'Conditions Générales d\'Utilisation de FRECORP ERP - Règles d\'utilisation du service SaaS de gestion d\'entreprise.')

@section('content')
<section class="pt-32 pb-20 px-4 sm:px-6">
    <div class="max-w-4xl mx-auto">

        <nav class="mb-8 text-sm">
            <a href="{{ route('home') }}" class="text-slate-400 hover:text-indigo-600 transition">Accueil</a>
            <span class="mx-2 text-slate-300">/</span>
            <span class="text-slate-900">Conditions Générales d'Utilisation</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl font-extrabold mb-8" style="letter-spacing:-.03em">
            <span class="gradient-text">Conditions Générales d'Utilisation</span>
        </h1>

        <div class="glass-card glass-card-static p-8 lg:p-12 space-y-8">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-file-contract text-indigo-600"></i>
                    Article 1 - Objet
                </h2>
                <p class="text-slate-600">
                    Les présentes Conditions Générales d'Utilisation (CGU) ont pour objet de définir les conditions d'accès et d'utilisation du service FRECORP ERP, une solution SaaS (Software as a Service) de gestion d'entreprise accessible via l'adresse <a href="https://app.frecorp.fr" class="text-indigo-600 hover:underline">https://app.frecorp.fr</a>.
                </p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-check-circle text-indigo-600"></i>
                    Article 2 - Acceptation des CGU
                </h2>
                <p class="text-slate-600">
                    L'inscription et l'utilisation du service impliquent l'acceptation pleine et entière des présentes CGU. Si vous n'acceptez pas ces conditions, vous ne devez pas utiliser le service FRECORP.
                </p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-laptop text-indigo-600"></i>
                    Article 3 - Description du service
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>FRECORP ERP est une solution de gestion d'entreprise intégrant les modules suivants :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li><strong class="text-slate-900">Point de Vente (POS)</strong> - Gestion des ventes en caisse</li>
                        <li><strong class="text-slate-900">Gestion de Stock</strong> - Multi-entrepôts, inventaires, transferts</li>
                        <li><strong class="text-slate-900">Facturation</strong> - Devis, factures, bons de livraison</li>
                        <li><strong class="text-slate-900">Achats</strong> - Commandes fournisseurs et réceptions</li>
                        <li><strong class="text-slate-900">Ressources Humaines</strong> - Employés, pointage QR code, congés</li>
                        <li><strong class="text-slate-900">Comptabilité</strong> - Plan comptable, écritures, balance</li>
                    </ul>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-user-plus text-indigo-600"></i>
                    Article 4 - Inscription et compte
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Pour utiliser FRECORP, l'utilisateur doit créer un compte en fournissant des informations exactes et à jour. L'utilisateur est responsable de :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>La confidentialité de ses identifiants de connexion</li>
                        <li>Toutes les activités effectuées depuis son compte</li>
                        <li>La mise à jour de ses informations personnelles</li>
                    </ul>
                    <p class="mt-4">FRECORP se réserve le droit de suspendre ou supprimer tout compte en cas de non-respect des présentes CGU.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-euro-sign text-indigo-600"></i>
                    Article 5 - Tarification
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Pendant la <strong class="text-slate-900">phase de lancement (bêta)</strong>, FRECORP est mis à disposition gratuitement, incluant :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Tous les modules sans restriction</li>
                        <li>Utilisateurs illimités</li>
                        <li>Stockage et données illimités</li>
                        <li>Support par email</li>
                    </ul>
                    <p class="mt-4">Aucune carte bancaire n'est demandée à l'inscription. À l'issue de la phase de lancement, les tarifs commerciaux seront communiqués par email <strong class="text-slate-900">au moins 30 jours avant</strong> leur entrée en vigueur, accompagnés des conditions du tarif préférentiel réservé aux early adopters. Le passage au service payant nécessite l'acceptation expresse du Client.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-database text-indigo-600"></i>
                    Article 6 - Données et propriété
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p><strong class="text-slate-900">Vos données vous appartiennent.</strong> FRECORP n'utilise pas vos données commerciales à des fins autres que la fourniture du service.</p>
                    <p>Vous pouvez à tout moment :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Exporter vos données dans des formats standards (CSV, PDF)</li>
                        <li>Demander la suppression complète de vos données</li>
                        <li>Obtenir une copie de toutes vos données (portabilité)</li>
                    </ul>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-ban text-indigo-600"></i>
                    Article 7 - Utilisation interdite
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>Il est interdit d'utiliser FRECORP pour :</p>
                    <ul class="list-disc list-inside space-y-2 ml-4">
                        <li>Des activités illégales ou frauduleuses</li>
                        <li>Violer les droits de propriété intellectuelle de tiers</li>
                        <li>Transmettre des virus ou codes malveillants</li>
                        <li>Surcharger intentionnellement les serveurs</li>
                        <li>Tenter d'accéder aux données d'autres utilisateurs</li>
                    </ul>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-shield-alt text-indigo-600"></i>
                    Article 8 - Disponibilité et garanties
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>FRECORP s'engage à fournir un service disponible 24h/24, 7j/7, avec un objectif de disponibilité de 99,5%.</p>
                    <p>Des interruptions programmées pour maintenance seront communiquées à l'avance. FRECORP ne peut être tenu responsable des interruptions dues à des causes extérieures (pannes réseau, cas de force majeure).</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-exclamation-triangle text-indigo-600"></i>
                    Article 9 - Limitation de responsabilité
                </h2>
                <div class="text-slate-600 space-y-3">
                    <p>FRECORP s'engage à fournir le service avec diligence et selon les règles de l'art, étant précisé qu'il pèse sur FRECORP une obligation de moyens, à l'exclusion de toute obligation de résultat.</p>
                    <p><strong class="text-slate-900">Vis-à-vis des professionnels :</strong> la responsabilité totale de FRECORP est limitée au montant des sommes effectivement versées par l'utilisateur au cours des 12 derniers mois précédant le fait générateur, avec un minimum de 100 € pour les utilisateurs en période d'essai gratuite. FRECORP ne saurait être tenu responsable des dommages indirects, pertes de données, manques à gagner ou préjudices commerciaux.</p>
                    <p><strong class="text-slate-900">Vis-à-vis des consommateurs (particuliers) :</strong> conformément aux articles L217-3 et suivants du Code de la consommation, les présentes limitations ne peuvent en aucun cas faire obstacle à la mise en œuvre de la garantie légale de conformité ou de la garantie des vices cachés, ni aux droits que l'utilisateur consommateur tient des dispositions impératives applicables.</p>
                    <p>FRECORP demeure responsable, sans plafonnement, en cas de dol, faute lourde, ou de manquement à une obligation essentielle privant le contrat de sa substance.</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-edit text-indigo-600"></i>
                    Article 10 - Modification des CGU
                </h2>
                <p class="text-slate-600">
                    FRECORP se réserve le droit de modifier les présentes CGU à tout moment. Les utilisateurs seront informés par email et/ou notification dans l'application au moins 30 jours avant l'entrée en vigueur des modifications. L'utilisation continue du service après cette date vaut acceptation des nouvelles CGU.
                </p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-gavel text-indigo-600"></i>
                    Article 11 - Droit applicable et litiges
                </h2>
                <p class="text-slate-600">
                    Les présentes CGU sont soumises au droit français. En cas de litige, les parties s'engagent à rechercher une solution amiable. À défaut, les tribunaux français seront seuls compétents.
                </p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-envelope text-indigo-600"></i>
                    Article 12 - Contact
                </h2>
                <p class="text-slate-600">
                    Pour toute question concernant ces CGU, contactez-nous à : <a href="mailto:contact@frecorp.fr" class="text-indigo-600 hover:underline">contact@frecorp.fr</a>
                </p>
            </section>

            <div class="pt-4 text-sm text-slate-400">
                <p><i class="fas fa-calendar mr-2"></i>Dernière mise à jour : 9 mai 2026</p>
            </div>
        </div>
    </div>
</section>
@endsection
