@extends('layouts.landing')

@section('title', 'Mentions Légales | FRECORP ERP')
@section('meta_description', 'Mentions légales de FRECORP ERP - Informations sur l\'éditeur, l\'hébergement et les conditions d\'utilisation du site.')

@section('content')
<section class="pt-32 pb-20 px-4 sm:px-6">
    <div class="max-w-4xl mx-auto">

        <nav class="mb-8 text-sm">
            <a href="{{ route('home') }}" class="text-slate-500 hover:text-indigo-600 transition">Accueil</a>
            <span class="mx-2 text-slate-300">/</span>
            <span class="text-slate-900">Mentions Légales</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl font-extrabold mb-8" style="letter-spacing:-.03em">
            <span class="gradient-text">Mentions Légales</span>
        </h1>

        <div class="glass-card glass-card-static p-8 lg:p-12 space-y-8">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-building text-indigo-600"></i>
                    Éditeur du site
                </h2>
                <div class="text-slate-600 space-y-2">
                    <p><strong class="text-slate-900">Nom du site :</strong> FRECORP</p>
                    <p><strong class="text-slate-900">Email de contact :</strong> <a href="mailto:contact@frecorp.fr" class="text-indigo-600 hover:underline">contact@frecorp.fr</a></p>
                    <p><strong class="text-slate-900">Site web :</strong> <a href="https://frecorp.fr" class="text-indigo-600 hover:underline">https://frecorp.fr</a></p>

                    {{-- ============================================================
                        📌 BLOC À COMPLÉTER + ACTIVER une fois le contrat CAPE / CESA
                        signé avec la CAE. Décommente le bloc ci-dessous et remplace
                        chaque __PLACEHOLDER__ par les infos fournies par ta coopérative.
                        ============================================================

                    <p><strong class="text-slate-900">Édité par :</strong> __PRENOM_NOM__, entrepreneur-salarié</p>
                    <p><strong class="text-slate-900">Hébergement juridique :</strong> __NOM_DE_LA_CAE__ (Coopérative d'Activité et d'Emploi)</p>
                    <p><strong class="text-slate-900">Forme juridique :</strong> __FORME_JURIDIQUE_CAE__ (ex : SCOP SARL, SCIC SA…)</p>
                    <p><strong class="text-slate-900">Adresse de la CAE :</strong> __ADRESSE_COMPLETE_CAE__</p>
                    <p><strong class="text-slate-900">SIREN :</strong> __SIREN_CAE__</p>
                    <p><strong class="text-slate-900">RCS :</strong> __RCS_CAE__</p>
                    <p><strong class="text-slate-900">N° TVA intracommunautaire :</strong> __TVA_CAE__</p>
                    <p><strong class="text-slate-900">Capital social :</strong> __CAPITAL_CAE__ €</p>

                    --}}
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-user-tie text-indigo-600"></i>
                    Responsable de la publication
                </h2>
                <p class="text-slate-600">Le responsable de la publication est l'éditeur du site FRECORP.</p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-server text-indigo-600"></i>
                    Hébergement
                </h2>
                <div class="text-slate-600 space-y-2">
                    <p><strong class="text-slate-900">Hébergeur :</strong> O2switch</p>
                    <p><strong class="text-slate-900">Adresse :</strong> Chem. des Pardiaux, 63000 Clermont-Ferrand, France</p>
                    <p><strong class="text-slate-900">Site web :</strong> <a href="https://www.o2switch.fr" class="text-indigo-600 hover:underline" target="_blank" rel="noopener">https://www.o2switch.fr</a></p>
                    <p class="mt-4"><i class="fas fa-shield-check text-emerald-600 mr-2"></i>Les données sont hébergées en France et soumises à la législation française et européenne (RGPD).</p>
                </div>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-copyright text-indigo-600"></i>
                    Propriété intellectuelle
                </h2>
                <p class="text-slate-600">
                    L'ensemble du contenu de ce site (textes, images, vidéos, logos, marques, etc.) est protégé par les lois françaises et internationales relatives à la propriété intellectuelle. Toute reproduction, représentation, modification, publication ou adaptation de tout ou partie des éléments du site est interdite sans autorisation écrite préalable de FRECORP.
                </p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-cookie text-indigo-600"></i>
                    Cookies
                </h2>
                <p class="text-slate-600">
                    Ce site utilise des cookies essentiels au fonctionnement du service. Ces cookies ne collectent pas de données personnelles à des fins publicitaires. Pour plus d'informations, consultez notre <a href="{{ route('confidentialite') }}" class="text-indigo-600 hover:underline">politique de confidentialité</a>.
                </p>
            </section>

            <hr class="border-slate-200">

            <section>
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-gavel text-indigo-600"></i>
                    Droit applicable
                </h2>
                <p class="text-slate-600">
                    Les présentes mentions légales sont régies par le droit français. En cas de litige, les tribunaux français seront seuls compétents.
                </p>
            </section>

            <div class="pt-4 text-sm text-slate-400">
                <p><i class="fas fa-calendar mr-2"></i>Dernière mise à jour : 9 mai 2026</p>
            </div>
        </div>
    </div>
</section>
@endsection
