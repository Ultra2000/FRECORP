@extends('layouts.app')

@section('title', 'FRECORP ERP | L\'ERP qui lit vos factures à votre place')
@section('meta_description', 'FRECORP ERP : import IA de factures fournisseur, devis en ligne acceptés en 1 clic, Factur-X EN16931, multi-entrepôts, POS, RH et comptabilité. 1 mois gratuit. Prêt pour la réforme 2026.')

@section('og_title', 'Convertisseur Factur-X Gratuit & ERP Complet | FRECORP')
@section('og_description', 'Convertissez gratuitement vos factures PDF en Factur-X EN16931 grâce à l\'IA. ERP complet : Stock, Facturation, POS, RH, Comptabilité.')

@section('meta_extra')
<meta name="keywords" content="convertisseur factur-x gratuit, ERP gratuit, gestion de stock, logiciel caisse, Chorus Pro, FRECORP, facturation électronique 2026">
<meta name="google-site-verification" content="EhxeJ8oqh_KiG9WbAeyJhYh6W4XNe_52wZCa3c-ZMHU">
@verbatim
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"SoftwareApplication","name":"FRECORP ERP","applicationCategory":"BusinessApplication","operatingSystem":"Web Browser","offers":{"@type":"Offer","price":"0","priceCurrency":"EUR"},"description":"Solution ERP complète avec convertisseur Factur-X gratuit par IA."}
</script>
@endverbatim
@endsection

@section('content')

{{-- Hero --}}
<section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 px-6">
    <div class="max-w-6xl mx-auto text-center relative z-10">
        <h1 class="text-5xl sm:text-6xl lg:text-8xl font-extrabold mb-6 leading-[1.05]">
            <span class="block text-white">L'ERP qui lit vos</span>
            <span class="block gradient-text">factures à votre place</span>
        </h1>
        <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-12 leading-relaxed">
            Gérez votre entreprise avec l'intelligence artificielle.
            <strong class="text-white">1 mois gratuit</strong>, sans carte bancaire.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
            <a href="https://app.frecorp.fr/admin/register" class="btn-primary px-10 py-4 rounded-2xl text-lg font-bold flex items-center justify-center gap-2 group">
                <span>Commencer gratuitement</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
            <a href="{{ route('demo') }}" class="glass-card glass-card-hover px-10 py-4 rounded-2xl text-lg font-bold flex items-center justify-center gap-2">
                <i class="fas fa-play text-indigo-400"></i>
                <span>Voir la démo</span>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 max-w-4xl mx-auto mb-16">
            <a href="#import-ia" class="glass-card glass-card-hover p-5 rounded-2xl text-left flex items-start gap-4 border-violet-500/20 hover:border-violet-400/40 transition-all group">
                <div class="w-10 h-10 bg-violet-500/20 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-violet-500/30 transition"><i class="fas fa-robot text-violet-400"></i></div>
                <div><div class="text-sm font-bold text-white mb-0.5">Import IA</div><div class="text-xs text-slate-500">Factures fournisseur en 1 clic</div></div>
            </a>
            <a href="#devis-en-ligne" class="glass-card glass-card-hover p-5 rounded-2xl text-left flex items-start gap-4 border-emerald-500/20 hover:border-emerald-400/40 transition-all group">
                <div class="w-10 h-10 bg-emerald-500/20 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-500/30 transition"><i class="fas fa-file-signature text-emerald-400"></i></div>
                <div><div class="text-sm font-bold text-white mb-0.5">Devis en ligne</div><div class="text-xs text-slate-500">Acceptation client instantanée</div></div>
            </a>
            <a href="#modules" class="glass-card glass-card-hover p-5 rounded-2xl text-left flex items-start gap-4 border-indigo-500/20 hover:border-indigo-400/40 transition-all group">
                <div class="w-10 h-10 bg-indigo-500/20 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-indigo-500/30 transition"><i class="fas fa-cash-register text-indigo-400"></i></div>
                <div><div class="text-sm font-bold text-white mb-0.5">Point de Vente</div><div class="text-xs text-slate-500">Caisse connectée au stock</div></div>
            </a>
            <a href="#modules" class="glass-card glass-card-hover p-5 rounded-2xl text-left flex items-start gap-4 border-purple-500/20 hover:border-purple-400/40 transition-all group">
                <div class="w-10 h-10 bg-purple-500/20 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-purple-500/30 transition"><i class="fas fa-boxes-stacked text-purple-400"></i></div>
                <div><div class="text-sm font-bold text-white mb-0.5">Multi-Entrepôts</div><div class="text-xs text-slate-500">Stocks en temps réel</div></div>
            </a>
            <a href="#modules" class="glass-card glass-card-hover p-5 rounded-2xl text-left flex items-start gap-4 border-orange-500/20 hover:border-orange-400/40 transition-all group">
                <div class="w-10 h-10 bg-orange-500/20 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-orange-500/30 transition"><i class="fas fa-file-invoice text-orange-400"></i></div>
                <div><div class="text-sm font-bold text-white mb-0.5">Factur-X 2026</div><div class="text-xs text-slate-500">Conformité EN16931 intégrée</div></div>
            </a>
            <a href="https://app.frecorp.fr/convertir-facture" class="glass-card glass-card-hover p-5 rounded-2xl text-left flex items-start gap-4 border-cyan-500/20 hover:border-cyan-400/40 transition-all group">
                <div class="w-10 h-10 bg-cyan-500/20 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-cyan-500/30 transition"><i class="fas fa-wand-magic-sparkles text-cyan-400"></i></div>
                <div>
                    <div class="text-sm font-bold text-white mb-0.5">Convertisseur <span class="text-[10px] bg-cyan-500/20 text-cyan-400 px-1.5 py-0.5 rounded-full font-bold ml-1">Gratuit</span></div>
                    <div class="text-xs text-slate-500">5 conversions/mois offertes</div>
                </div>
            </a>
        </div>
        <div class="pt-10 border-t border-white/5">
            <p class="text-slate-500 text-xs mb-5 uppercase tracking-widest font-semibold">Sécurité & Conformité Garanties</p>
            <div class="flex flex-wrap justify-center items-center gap-6">
                <div class="flex items-center gap-2 text-slate-500 text-sm"><div class="w-8 h-8 bg-white/5 rounded-full flex items-center justify-center border border-white/10"><i class="fas fa-flag text-xs text-blue-400"></i></div>Made in France</div>
                <div class="flex items-center gap-2 text-slate-500 text-sm"><div class="w-8 h-8 bg-white/5 rounded-full flex items-center justify-center border border-white/10"><i class="fas fa-shield-halved text-xs text-green-400"></i></div>RGPD Compliant</div>
                <div class="flex items-center gap-2 text-slate-500 text-sm"><div class="w-8 h-8 bg-white/5 rounded-full flex items-center justify-center border border-white/10"><i class="fas fa-lock text-xs text-indigo-400"></i></div>Données hébergées en France</div>
                <div class="flex items-center gap-2 text-slate-500 text-sm"><div class="w-8 h-8 bg-white/5 rounded-full flex items-center justify-center border border-white/10"><i class="fas fa-file-contract text-xs text-orange-400"></i></div>Réforme 2026 prête</div>
            </div>
        </div>
    </div>
</section>

{{-- Convertisseur Factur-X --}}
<section id="convertisseur" class="py-24 px-6 relative">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="glass-card p-10 lg:p-16 rounded-[3rem] border-cyan-500/20 relative overflow-hidden">
            <div class="absolute -top-20 -right-20 w-80 h-80 bg-cyan-500/10 rounded-full blur-[120px] pointer-events-none"></div>
            <div class="absolute -bottom-20 -left-20 w-60 h-60 bg-indigo-500/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="text-center mb-14 relative z-10">
                <div class="inline-flex items-center bg-cyan-500/10 border border-cyan-500/30 px-4 py-2 rounded-lg text-cyan-400 text-sm font-bold mb-6"><i class="fas fa-sparkles mr-2"></i> OUTIL GRATUIT - SANS INSCRIPTION</div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-6">
                    <span class="text-white">Convertissez vos factures en </span>
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Factur-X</span>
                </h2>
                <p class="text-slate-400 text-lg max-w-3xl mx-auto leading-relaxed">Votre facture PDF, image ou Excel est automatiquement analysée par notre IA et convertie en facture électronique conforme <strong class="text-white">Factur-X EN16931</strong>. Gratuit, rapide, sans inscription.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 mb-14 relative z-10">
                <div class="text-center">
                    <div class="w-16 h-16 bg-cyan-500/20 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-cyan-500/30"><i class="fas fa-cloud-arrow-up text-2xl text-cyan-400"></i></div>
                    <div class="text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Étape 1</div>
                    <h4 class="text-lg font-bold text-white mb-2">Importez votre facture</h4>
                    <p class="text-sm text-slate-500">Glissez un PDF, une image (JPEG, PNG) ou un fichier Excel/CSV</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-indigo-500/20 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-indigo-500/30"><i class="fas fa-microchip text-2xl text-indigo-400"></i></div>
                    <div class="text-xs font-bold text-indigo-400 uppercase tracking-widest mb-2">Étape 2</div>
                    <h4 class="text-lg font-bold text-white mb-2">L'IA extrait les données</h4>
                    <p class="text-sm text-slate-500">Vendeur, acheteur, lignes, TVA, totaux — tout est reconnu automatiquement</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-500/20 rounded-2xl flex items-center justify-center mx-auto mb-5 border border-emerald-500/30"><i class="fas fa-file-circle-check text-2xl text-emerald-400"></i></div>
                    <div class="text-xs font-bold text-emerald-400 uppercase tracking-widest mb-2">Étape 3</div>
                    <h4 class="text-lg font-bold text-white mb-2">Téléchargez en Factur-X</h4>
                    <p class="text-sm text-slate-500">Votre facture Factur-X PDF/A-3 avec XML CII intégré, prête pour la réforme 2026</p>
                </div>
            </div>
            <div class="flex flex-col items-center gap-6 relative z-10">
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-lg text-xs font-semibold text-slate-400"><i class="fas fa-file-pdf text-red-400 mr-1.5"></i>PDF</span>
                    <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-lg text-xs font-semibold text-slate-400"><i class="fas fa-image text-blue-400 mr-1.5"></i>JPEG / PNG</span>
                    <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-lg text-xs font-semibold text-slate-400"><i class="fas fa-file-excel text-green-400 mr-1.5"></i>Excel / CSV</span>
                    <span class="px-3 py-1.5 bg-cyan-500/10 border border-cyan-500/30 rounded-lg text-xs font-bold text-cyan-400"><i class="fas fa-file-circle-check mr-1.5"></i>Factur-X EN16931</span>
                </div>
                <a href="https://app.frecorp.fr/convertir-facture" class="px-10 py-4 rounded-2xl text-lg font-bold flex items-center justify-center gap-3 group text-white" style="background:linear-gradient(135deg,#06b6d4 0%,#3b82f6 100%);box-shadow:0 10px 40px -10px rgba(6,182,212,.5);transition:all .3s ease;">
                    <i class="fas fa-wand-magic-sparkles"></i><span>Convertir gratuitement</span><i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
                <p class="text-xs text-slate-500">5 conversions/mois gratuites • Sans inscription • Résultat en quelques secondes</p>
            </div>
        </div>
    </div>
</section>

{{-- Import IA --}}
<section id="import-ia" class="py-24 px-6 relative">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="glass-card p-10 lg:p-16 rounded-[3rem] border-violet-500/20 relative overflow-hidden">
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-violet-500/10 rounded-full blur-[120px] pointer-events-none"></div>
            <div class="absolute -bottom-20 -right-20 w-60 h-60 bg-indigo-500/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="text-center mb-14 relative z-10">
                <div class="inline-flex items-center bg-violet-500/10 border border-violet-500/30 px-4 py-2 rounded-lg text-violet-400 text-sm font-bold mb-6"><i class="fas fa-robot mr-2"></i> PROPULSÉ PAR CLAUDE AI (ANTHROPIC)</div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-6">
                    <span class="text-white">Vos factures fournisseurs </span>
                    <span class="bg-gradient-to-r from-violet-400 to-indigo-400 bg-clip-text text-transparent">importées en 1 clic</span>
                </h2>
                <p class="text-slate-400 text-lg max-w-3xl mx-auto leading-relaxed">Déposez une facture PDF ou une photo. L'IA lit chaque ligne, la lie à vos produits existants et met à jour votre stock automatiquement. <strong class="text-white">Le système mémorise vos choix</strong> — la prochaine facture du même fournisseur s'importe en un clic.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 mb-14 relative z-10">
                <div class="text-center group">
                    <div class="w-20 h-20 bg-violet-500/20 rounded-3xl flex items-center justify-center mx-auto mb-5 border border-violet-500/30 group-hover:scale-110 transition-transform duration-300"><i class="fas fa-file-arrow-up text-3xl text-violet-400"></i></div>
                    <div class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-violet-600 text-white text-xs font-bold mb-3">1</div>
                    <h4 class="text-lg font-bold text-white mb-2">Envoyez la facture</h4>
                    <p class="text-sm text-slate-500">PDF, photo ou scan — peu importe le format. L'IA gère tout.</p>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-indigo-500/20 rounded-3xl flex items-center justify-center mx-auto mb-5 border border-indigo-500/30 group-hover:scale-110 transition-transform duration-300"><i class="fas fa-microchip text-3xl text-indigo-400"></i></div>
                    <div class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-indigo-600 text-white text-xs font-bold mb-3">2</div>
                    <h4 class="text-lg font-bold text-white mb-2">L'IA extrait et lie les produits</h4>
                    <p class="text-sm text-slate-500">Chaque ligne est reconnue et associée à vos produits. Vous validez en 30 secondes.</p>
                </div>
                <div class="text-center group">
                    <div class="w-20 h-20 bg-emerald-500/20 rounded-3xl flex items-center justify-center mx-auto mb-5 border border-emerald-500/30 group-hover:scale-110 transition-transform duration-300"><i class="fas fa-cubes text-3xl text-emerald-400"></i></div>
                    <div class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-emerald-600 text-white text-xs font-bold mb-3">3</div>
                    <h4 class="text-lg font-bold text-white mb-2">Stock mis à jour instantanément</h4>
                    <p class="text-sm text-slate-500">Le bon de commande est créé, votre stock ajusté, les correspondances mémorisées.</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 relative z-10">
                <div class="bg-white/[0.03] border border-white/[0.08] rounded-2xl p-5 text-center"><i class="fas fa-brain text-violet-400 text-xl mb-3 block"></i><div class="text-white font-bold text-sm">Apprentissage continu</div><div class="text-slate-500 text-xs mt-1">Le système mémorise vos associations fournisseur → produit</div></div>
                <div class="bg-white/[0.03] border border-white/[0.08] rounded-2xl p-5 text-center"><i class="fas fa-clock text-indigo-400 text-xl mb-3 block"></i><div class="text-white font-bold text-sm">Gain de temps réel</div><div class="text-slate-500 text-xs mt-1">De 30 min à 30 secondes par facture fournisseur</div></div>
                <div class="bg-white/[0.03] border border-white/[0.08] rounded-2xl p-5 text-center"><i class="fas fa-file-image text-cyan-400 text-xl mb-3 block"></i><div class="text-white font-bold text-sm">Tous formats acceptés</div><div class="text-slate-500 text-xs mt-1">PDF natif, scan, photo, image floue — l'IA s'adapte</div></div>
                <div class="bg-white/[0.03] border border-white/[0.08] rounded-2xl p-5 text-center"><i class="fas fa-shield-check text-emerald-400 text-xl mb-3 block"></i><div class="text-white font-bold text-sm">Vous restez maître</div><div class="text-slate-500 text-xs mt-1">Validation manuelle avant création — aucune erreur silencieuse</div></div>
            </div>
            <div class="text-center mt-10 relative z-10">
                <a href="https://app.frecorp.fr/admin/register" class="px-10 py-4 rounded-2xl text-lg font-bold inline-flex items-center gap-3 group text-white" style="background:linear-gradient(135deg,#7c3aed 0%,#6366f1 100%);box-shadow:0 10px 40px -10px rgba(124,58,237,.5);transition:all .3s ease;">
                    <i class="fas fa-rocket"></i><span>Tester l'import IA gratuitement</span><i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
                <p class="text-xs text-slate-500 mt-3">1 mois gratuit — sans carte bancaire</p>
            </div>
        </div>
    </div>
</section>

{{-- Devis en ligne --}}
<section id="devis-en-ligne" class="py-24 px-6 bg-slate-950/50 relative">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center bg-emerald-500/10 border border-emerald-500/30 px-4 py-2 rounded-lg text-emerald-400 text-sm font-bold mb-6"><i class="fas fa-handshake mr-2"></i> ZÉRO PAPIER — ZÉRO TÉLÉPHONE</div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-6">
                <span class="text-white">Vos clients acceptent votre devis </span>
                <span class="bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">en 1 clic</span>
            </h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">Envoyez un lien sécurisé. Votre client voit, signe et accepte. Vous êtes notifié instantanément — email + notification dans votre tableau de bord.</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 mb-16">
            <div class="glass-card p-8 rounded-3xl border-indigo-500/20">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-indigo-500/20 rounded-xl flex items-center justify-center text-indigo-400"><i class="fas fa-user-tie"></i></div>
                    <div><div class="text-xs text-slate-500 uppercase tracking-widest font-bold">Côté vous</div><div class="text-white font-bold">Dans FRECORP</div></div>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0 mt-0.5">1</div><div><div class="text-white font-semibold text-sm">Créez le devis en quelques clics</div><div class="text-slate-500 text-xs mt-1">Produits, quantités, remises, conditions — tout est personnalisable</div></div></div>
                    <div class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0 mt-0.5">2</div><div><div class="text-white font-semibold text-sm">Envoyez le lien par email</div><div class="text-slate-500 text-xs mt-1">Un lien sécurisé unique, valable jusqu'à la date d'expiration que vous définissez</div></div></div>
                    <div class="flex items-start gap-4"><div class="w-8 h-8 rounded-full bg-emerald-600 flex items-center justify-center text-white text-xs font-bold flex-shrink-0 mt-0.5">3</div><div><div class="text-emerald-400 font-bold text-sm">✓ Notification instantanée à l'acceptation</div><div class="text-slate-500 text-xs mt-1">Email + notification in-app. Convertissez en vente en 1 clic.</div></div></div>
                </div>
            </div>
            <div class="glass-card p-8 rounded-3xl border-emerald-500/20">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-emerald-500/20 rounded-xl flex items-center justify-center text-emerald-400"><i class="fas fa-user"></i></div>
                    <div><div class="text-xs text-slate-500 uppercase tracking-widest font-bold">Côté client</div><div class="text-white font-bold">Sans inscription, depuis son téléphone</div></div>
                </div>
                <div class="bg-slate-900 rounded-2xl p-5 border border-white/10 text-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div><div class="text-white font-bold">Devis DEV-2026-00042</div><div class="text-slate-500 text-xs">Valable jusqu'au 31/05/2026</div></div>
                        <span class="px-2 py-1 bg-yellow-500/20 text-yellow-400 rounded-lg text-xs font-bold">En attente</span>
                    </div>
                    <div class="space-y-2 mb-4 border-t border-white/5 pt-4">
                        <div class="flex justify-between text-xs"><span class="text-slate-400">Produit A × 10</span><span class="text-white">450,00 €</span></div>
                        <div class="flex justify-between text-xs"><span class="text-slate-400">Prestation × 2h</span><span class="text-white">200,00 €</span></div>
                        <div class="flex justify-between text-xs font-bold border-t border-white/5 pt-2"><span class="text-white">Total TTC</span><span class="text-emerald-400">780,00 €</span></div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button class="py-2.5 bg-emerald-600 text-white rounded-xl font-bold text-xs flex items-center justify-center gap-1.5"><i class="fas fa-check"></i> Accepter</button>
                        <button class="py-2.5 bg-red-600/30 text-red-400 rounded-xl font-bold text-xs flex items-center justify-center gap-1.5"><i class="fas fa-times"></i> Refuser</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="glass-card p-6 rounded-2xl text-center"><div class="text-3xl font-black text-emerald-400 mb-1">1 clic</div><div class="text-xs text-slate-500 font-semibold uppercase tracking-widest">Pour accepter</div></div>
            <div class="glass-card p-6 rounded-2xl text-center"><div class="text-3xl font-black text-indigo-400 mb-1">Instantané</div><div class="text-xs text-slate-500 font-semibold uppercase tracking-widest">Notification</div></div>
            <div class="glass-card p-6 rounded-2xl text-center"><div class="text-3xl font-black text-violet-400 mb-1">0 papier</div><div class="text-xs text-slate-500 font-semibold uppercase tracking-widest">Zéro impression</div></div>
            <div class="glass-card p-6 rounded-2xl text-center"><div class="text-3xl font-black text-cyan-400 mb-1">Auto</div><div class="text-xs text-slate-500 font-semibold uppercase tracking-widest">Converti en vente</div></div>
        </div>
    </div>
</section>

{{-- Modules --}}
<section id="modules" class="py-24 px-6 bg-slate-950/50 relative">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-20">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Une suite modulaire complète</h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">Activez les modules dont vous avez besoin selon votre croissance. Tout est inclus, sans frais cachés.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="glass-card glass-card-hover p-8 rounded-3xl group transition-all duration-300"><div class="feature-icon w-14 h-14 bg-indigo-600/20 rounded-2xl flex items-center justify-center mb-6 text-indigo-400"><i class="fas fa-boxes-stacked text-2xl"></i></div><h3 class="text-xl font-bold mb-4">Stocks & Achats</h3><p class="text-slate-400 text-sm mb-6 leading-relaxed">Gestion multi-entrepôts, transferts de stock entre sites, inventaires et suivi des achats fournisseurs avec historique complet.</p><ul class="space-y-3 text-xs text-slate-500 font-semibold"><li><i class="fas fa-check text-indigo-500 mr-2"></i>MULTI-ENTREPÔTS</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>TRANSFERTS INTER-SITES</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>INVENTAIRES & STOCK CONSOLIDÉ</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>GESTION FOURNISSEURS</li></ul></div>
            <div class="glass-card glass-card-hover p-8 rounded-3xl group transition-all duration-300"><div class="feature-icon w-14 h-14 bg-emerald-600/20 rounded-2xl flex items-center justify-center mb-6 text-emerald-400"><i class="fas fa-cash-register text-2xl"></i></div><h3 class="text-xl font-bold mb-4">Point de Vente (POS)</h3><p class="text-slate-400 text-sm mb-6 leading-relaxed">Caisse tactile avec sessions caissier, multi-paiements et clôture automatique. Historique complet des sessions.</p><ul class="space-y-3 text-xs text-slate-500 font-semibold"><li><i class="fas fa-check text-emerald-500 mr-2"></i>SESSIONS DE CAISSE</li><li><i class="fas fa-check text-emerald-500 mr-2"></i>MULTI-MODES PAIEMENT</li><li><i class="fas fa-check text-emerald-500 mr-2"></i>HISTORIQUE SESSIONS</li><li><i class="fas fa-check text-emerald-500 mr-2"></i>CLÔTURE AVEC ÉCARTS</li></ul></div>
            <div class="glass-card glass-card-hover p-8 rounded-3xl group transition-all duration-300 border-purple-500/20"><div class="feature-icon w-14 h-14 bg-purple-600/20 rounded-2xl flex items-center justify-center mb-6 text-purple-400"><i class="fas fa-user-clock text-2xl"></i></div><h3 class="text-xl font-bold mb-4">Ressources Humaines</h3><p class="text-slate-400 text-sm mb-6 leading-relaxed">Gestion des employés, pointage par QR Code rotatif sécurisé, plannings hebdomadaires et demandes de congés.</p><ul class="space-y-3 text-xs text-slate-500 font-semibold"><li><i class="fas fa-check text-purple-500 mr-2"></i>POINTAGE QR CODE ROTATIF</li><li><i class="fas fa-check text-purple-500 mr-2"></i>PLANNINGS EMPLOYÉS</li><li><i class="fas fa-check text-purple-500 mr-2"></i>DEMANDES DE CONGÉS</li><li><i class="fas fa-check text-purple-500 mr-2"></i>SUIVI DU TEMPS</li></ul></div>
            <div class="glass-card glass-card-hover p-8 rounded-3xl group transition-all duration-300"><div class="feature-icon w-14 h-14 bg-blue-600/20 rounded-2xl flex items-center justify-center mb-6 text-blue-400"><i class="fas fa-chart-line text-2xl"></i></div><h3 class="text-xl font-bold mb-4">Comptabilité & Banque</h3><p class="text-slate-400 text-sm mb-6 leading-relaxed">Grand Livre automatique, Balance Générale, Export FEC conforme, Journal d'Audit et gestion multi-comptes bancaires.</p><ul class="space-y-3 text-xs text-slate-500 font-semibold"><li><i class="fas fa-check text-blue-500 mr-2"></i>GRAND LIVRE & BALANCE</li><li><i class="fas fa-check text-blue-500 mr-2"></i>EXPORT FEC CONFORME</li><li><i class="fas fa-check text-blue-500 mr-2"></i>JOURNAL D'AUDIT</li><li><i class="fas fa-check text-blue-500 mr-2"></i>RAPPORTS TVA</li></ul></div>
            <div class="glass-card glass-card-hover p-8 rounded-3xl group transition-all duration-300"><div class="feature-icon w-14 h-14 bg-orange-600/20 rounded-2xl flex items-center justify-center mb-6 text-orange-400"><i class="fas fa-file-invoice-dollar text-2xl"></i></div><h3 class="text-xl font-bold mb-4">Ventes & Facturation</h3><p class="text-slate-400 text-sm mb-6 leading-relaxed">Devis en ligne acceptables en 1 clic, factures PDF Factur-X, avoirs, commandes récurrentes et gestion clients complète.</p><ul class="space-y-3 text-xs text-slate-500 font-semibold"><li><i class="fas fa-check text-orange-500 mr-2"></i>DEVIS EN LIGNE — ACCEPTATION 1 CLIC</li><li><i class="fas fa-check text-orange-500 mr-2"></i>FACTURES PDF & FACTUR-X READY</li><li><i class="fas fa-check text-orange-500 mr-2"></i>COMMANDES RÉCURRENTES</li><li><i class="fas fa-check text-orange-500 mr-2"></i>AVOIRS & BONS DE LIVRAISON</li></ul></div>
            <div class="glass-card glass-card-hover p-8 rounded-3xl group transition-all duration-300 border-cyan-500/20 relative overflow-hidden"><div class="absolute top-4 right-4 inline-flex items-center bg-cyan-500/20 text-cyan-400 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">Gratuit</div><div class="feature-icon w-14 h-14 bg-cyan-600/20 rounded-2xl flex items-center justify-center mb-6 text-cyan-400"><i class="fas fa-wand-magic-sparkles text-2xl"></i></div><h3 class="text-xl font-bold mb-4">Convertisseur Factur-X IA</h3><p class="text-slate-400 text-sm mb-6 leading-relaxed">Convertissez gratuitement vos factures PDF, images ou Excel en Factur-X conforme EN16931 grâce à l'intelligence artificielle. 5 conversions/mois offertes.</p><ul class="space-y-3 text-xs text-slate-500 font-semibold mb-6"><li><i class="fas fa-check text-cyan-500 mr-2"></i>EXTRACTION IA AUTOMATIQUE</li><li><i class="fas fa-check text-cyan-500 mr-2"></i>PDF, IMAGES, EXCEL, CSV</li><li><i class="fas fa-check text-cyan-500 mr-2"></i>FACTUR-X EN16931 / CII</li><li><i class="fas fa-check text-cyan-500 mr-2"></i>5 CONVERSIONS/MOIS GRATUITES</li></ul><a href="https://app.frecorp.fr/convertir-facture" class="inline-flex items-center gap-2 text-cyan-400 font-bold text-sm hover:text-cyan-300 transition">Essayer maintenant <i class="fas fa-arrow-right text-xs"></i></a></div>
        </div>
    </div>
</section>

{{-- Factur-X 2026 --}}
<section id="chorus" class="py-12 px-6 relative">
    <div class="max-w-5xl mx-auto relative z-10">
        <div class="glass-card p-8 rounded-3xl border-indigo-500/20 relative overflow-hidden">
            <div class="absolute -top-16 -right-16 w-64 h-64 bg-indigo-500/10 rounded-full blur-[80px] pointer-events-none"></div>
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-indigo-500/20 rounded-2xl flex items-center justify-center shrink-0 border border-indigo-500/30"><i class="fas fa-file-invoice text-indigo-400 text-lg"></i></div>
                    <div>
                        <h2 class="text-xl font-bold text-white">Facturation électronique obligatoire dès le <span class="text-indigo-400">1ᵉʳ septembre 2026</span></h2>
                        <p class="text-slate-400 text-sm mt-1">FRECORP génère déjà vos factures au format Factur-X — vous êtes prêts.</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <span class="inline-flex items-center gap-2 bg-emerald-500/10 border border-emerald-500/30 px-4 py-2 rounded-full text-emerald-400 text-sm font-bold"><i class="fas fa-circle-check"></i> FRECORP Prêt</span>
                    <a href="https://app.frecorp.fr/admin/register" class="btn-primary inline-flex items-center gap-2 px-6 py-2.5 rounded-xl font-bold text-sm text-white">Anticiper <i class="fas fa-arrow-right text-xs"></i></a>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-3 pt-6 border-t border-white/5">
                <div class="flex items-center gap-3 p-3 rounded-2xl bg-white/[0.03]"><div class="w-8 h-8 bg-green-500/20 rounded-lg flex items-center justify-center shrink-0"><i class="fas fa-building text-green-400 text-xs"></i></div><div><div class="text-green-400 font-bold text-sm">Sept 2026</div><div class="text-slate-400 text-xs">Grandes Entreprises</div></div></div>
                <div class="flex items-center gap-3 p-3 rounded-2xl bg-white/[0.03]"><div class="w-8 h-8 bg-yellow-500/20 rounded-lg flex items-center justify-center shrink-0"><i class="fas fa-industry text-yellow-400 text-xs"></i></div><div><div class="text-yellow-400 font-bold text-sm">Sept 2027</div><div class="text-slate-400 text-xs">ETI</div></div></div>
                <div class="flex items-center gap-3 p-3 rounded-2xl bg-orange-500/5 border border-orange-500/20"><div class="w-8 h-8 bg-orange-500/20 rounded-lg flex items-center justify-center shrink-0"><i class="fas fa-store text-orange-400 text-xs"></i></div><div><div class="text-orange-400 font-bold text-sm">Sept 2028</div><div class="text-slate-400 text-xs">PME & TPE ← vous</div></div></div>
            </div>
        </div>
    </div>
</section>

{{-- RH --}}
<section id="rh" class="py-24 px-6 bg-slate-950/50">
    <div class="max-w-6xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Le pointage le plus sécurisé du marché</h2>
            <p class="text-slate-400 text-lg">Fini les fraudes. QR code rotatif toutes les 30 secondes.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="glass-card p-10 rounded-[2.5rem] border-purple-500/20">
                <div class="aspect-square bg-white rounded-3xl p-8 flex flex-col items-center justify-center mb-6">
                    <i class="fas fa-qrcode text-8xl sm:text-9xl text-slate-900 mb-4 animate-pulse"></i>
                    <span class="text-slate-900 font-mono font-bold tracking-tighter text-sm">TOKEN: FRC-8294-XK</span>
                    <span class="text-slate-500 text-xs mt-2">Expire dans 27s</span>
                </div>
                <div class="text-center text-xs text-slate-500 font-bold uppercase tracking-widest">QR Code Dynamique rotatif (30s)</div>
            </div>
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-purple-400 mb-4">Anti-Fraude Natif</h3>
                    <p class="text-slate-400 leading-relaxed">Fini les pointages pour les collègues absents. Notre QR Code change toutes les 30 secondes et nécessite la présence physique pour valider la prise de poste.</p>
                </div>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4"><div class="w-10 h-10 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-400"><i class="fas fa-mobile-screen"></i></div><span class="text-slate-300">Scan direct via smartphone employé</span></li>
                    <li class="flex items-center gap-4"><div class="w-10 h-10 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-400"><i class="fas fa-clock-rotate-left"></i></div><span class="text-slate-300">Historique de pointage immuable</span></li>
                    <li class="flex items-center gap-4"><div class="w-10 h-10 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-400"><i class="fas fa-calendar-check"></i></div><span class="text-slate-300">Gestion congés et plannings intégrée</span></li>
                    <li class="flex items-center gap-4"><div class="w-10 h-10 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-400"><i class="fas fa-file-export"></i></div><span class="text-slate-300">Export direct vers module paie</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- Pricing --}}
<section id="pricing" class="py-24 px-6 relative">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Tarifs simples et transparents</h2>
            <p class="text-slate-400 text-lg">Commencez gratuitement pendant 1 mois, puis évoluez selon vos besoins.</p>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            <div class="glass-card p-10 rounded-[2rem] flex flex-col border-green-500/30">
                <div class="mb-8"><div class="inline-flex items-center bg-green-500/20 text-green-400 px-3 py-1 rounded-full text-xs font-bold mb-3">OFFRE DE LANCEMENT</div><h4 class="font-bold text-slate-400 uppercase tracking-widest text-xs mb-2">1 mois gratuit</h4><div class="text-4xl font-bold">0€<span class="text-sm text-slate-500 font-normal">/mois</span></div></div>
                <ul class="space-y-4 mb-10 flex-grow text-sm text-slate-400"><li><i class="fas fa-check text-green-500 mr-2"></i>Tous les modules inclus</li><li><i class="fas fa-check text-green-500 mr-2"></i>Utilisateurs illimités</li><li><i class="fas fa-check text-green-500 mr-2"></i>Entreprises illimitées</li><li><i class="fas fa-check text-green-500 mr-2"></i>Support communauté</li><li><i class="fas fa-check text-green-500 mr-2"></i>Mises à jour incluses</li></ul>
                <a href="https://app.frecorp.fr/admin/register" class="w-full py-4 bg-green-600 hover:bg-green-500 text-white rounded-xl font-bold transition text-center">Profiter de l'offre</a>
            </div>
            <div class="glass-card p-10 rounded-[2rem] flex flex-col border-indigo-500/50 relative scale-105 shadow-2xl shadow-indigo-500/10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-indigo-600 px-4 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Après 1 mois</div>
                <div class="mb-8"><h4 class="font-bold text-indigo-400 uppercase tracking-widest text-xs mb-2">Standard</h4><div class="text-4xl font-bold">30€<span class="text-sm text-slate-500 font-normal">/mois</span></div></div>
                <ul class="space-y-4 mb-10 flex-grow text-sm text-slate-300"><li><i class="fas fa-check text-indigo-500 mr-2"></i>Tous les modules inclus</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>Utilisateurs illimités</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>Jusqu'à 5 entreprises</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>Support email prioritaire</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>Exports comptables FEC</li><li><i class="fas fa-check text-indigo-500 mr-2"></i>Mises à jour incluses</li></ul>
                <a href="https://app.frecorp.fr/admin/register" class="w-full py-4 btn-primary rounded-xl font-bold text-white text-center block">Après l'offre gratuite</a>
            </div>
            <div class="glass-card p-10 rounded-[2rem] flex flex-col border-white/5">
                <div class="mb-8"><h4 class="font-bold text-slate-400 uppercase tracking-widest text-xs mb-2">Enterprise</h4><div class="text-4xl font-bold">Sur Mesure</div></div>
                <ul class="space-y-4 mb-10 flex-grow text-sm text-slate-400"><li><i class="fas fa-check text-slate-400 mr-2"></i>Entreprises Illimitées</li><li><i class="fas fa-server text-indigo-400 mr-2"></i><span class="text-white">Installation on-premise</span></li><li><i class="fas fa-globe text-indigo-400 mr-2"></i><span class="text-white">Votre propre domaine</span></li><li><i class="fas fa-check text-slate-400 mr-2"></i>Déploiement Docker dédié</li><li><i class="fas fa-check text-slate-400 mr-2"></i>Formation sur site</li><li><i class="fas fa-check text-slate-400 mr-2"></i>Support téléphone 24/7</li></ul>
                <a href="mailto:contact@frecorp.fr?subject=Demande%20Enterprise" class="w-full py-4 glass-card rounded-xl font-bold hover:bg-white/5 transition text-center block">Nous contacter</a>
            </div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section id="faq" class="py-24 px-6 bg-slate-950/50">
    <div class="max-w-4xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Questions Fréquentes</h2>
            <p class="text-slate-400">Tout ce que vous devez savoir sur FRECORP</p>
        </div>
        <div class="space-y-4">
            <details class="glass-card rounded-2xl group" open>
                <summary class="p-6 cursor-pointer flex justify-between items-center font-bold text-lg list-none">Pourquoi 1 mois gratuit ?<i class="fas fa-chevron-down text-indigo-400"></i></summary>
                <div class="px-6 pb-6 text-slate-400 leading-relaxed">Nous voulons que vous testiez FRECORP en conditions réelles. Pendant 1 mois, tout est gratuit et illimité. Ensuite, l'abonnement passe à seulement 30€/mois. Vous pouvez exporter vos données à tout moment. Aucune carte bancaire requise à l'inscription.</div>
            </details>
            <details class="glass-card rounded-2xl group">
                <summary class="p-6 cursor-pointer flex justify-between items-center font-bold text-lg list-none">Combien d'utilisateurs puis-je ajouter ?<i class="fas fa-chevron-down text-indigo-400"></i></summary>
                <div class="px-6 pb-6 text-slate-400 leading-relaxed">Autant que vous voulez ! Il n'y a aucune limite sur le nombre d'utilisateurs, d'employés ou d'entreprises que vous pouvez gérer avec FRECORP.</div>
            </details>
            <details class="glass-card rounded-2xl group">
                <summary class="p-6 cursor-pointer flex justify-between items-center font-bold text-lg list-none">Mes données sont-elles sécurisées ?<i class="fas fa-chevron-down text-indigo-400"></i></summary>
                <div class="px-6 pb-6 text-slate-400 leading-relaxed">Absolument. Vos données sont hébergées en France 🇫🇷, chiffrées et sauvegardées quotidiennement. Nous sommes conformes au RGPD et ne partageons jamais vos données avec des tiers.</div>
            </details>
            <details class="glass-card rounded-2xl group">
                <summary class="p-6 cursor-pointer flex justify-between items-center font-bold text-lg list-none">FRECORP est-il compatible avec la facturation électronique 2026 ?<i class="fas fa-chevron-down text-indigo-400"></i></summary>
                <div class="px-6 pb-6 text-slate-400 leading-relaxed">Oui, FRECORP est déjà préparé pour Chorus Pro et la facturation électronique obligatoire. Nous générons des factures au format Factur-X et nous nous connecterons aux PDP partenaires avant les échéances légales (2026-2028).</div>
            </details>
            <details class="glass-card rounded-2xl group">
                <summary class="p-6 cursor-pointer flex justify-between items-center font-bold text-lg list-none">Comment fonctionne le pointage QR code ?<i class="fas fa-chevron-down text-indigo-400"></i></summary>
                <div class="px-6 pb-6 text-slate-400 leading-relaxed">Un QR code dynamique est affiché sur un écran dans vos locaux. Ce code change toutes les 30 secondes pour éviter toute fraude. Les employés scannent le code avec leur smartphone pour pointer leur arrivée, pause ou départ.</div>
            </details>
        </div>
    </div>
</section>

{{-- Blog teaser --}}
@if($latestPosts->isNotEmpty())
<section class="py-24 px-6 relative">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex items-end justify-between mb-12">
            <div>
                <h2 class="text-3xl sm:text-4xl font-bold mb-3">Derniers articles du blog</h2>
                <p class="text-slate-400">Réforme Factur-X, facturation et tutoriels FRECORP</p>
            </div>
            <a href="{{ route('blog.index') }}" class="hidden sm:inline-flex items-center gap-2 text-indigo-400 font-semibold hover:text-indigo-300 transition">
                Tous les articles <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($latestPosts as $post)
            <a href="{{ route('blog.show', $post) }}" class="glass-card rounded-3xl overflow-hidden group hover:border-indigo-500/30 transition-all duration-300">
                @if($post->featured_image)
                    <div class="aspect-video overflow-hidden"><img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"></div>
                @else
                    <div class="aspect-video bg-gradient-to-br from-indigo-900/50 to-purple-900/50 flex items-center justify-center"><i class="fas fa-newspaper text-4xl text-indigo-400/30"></i></div>
                @endif
                <div class="p-6">
                    @php $colors = ['reform'=>'text-orange-400 bg-orange-500/10','facturation'=>'text-emerald-400 bg-emerald-500/10','tutorial'=>'text-indigo-400 bg-indigo-500/10']; @endphp
                    <span class="text-xs font-bold px-3 py-1 rounded-full {{ $colors[$post->category] ?? 'text-slate-400 bg-white/5' }}">{{ $post->categoryLabel() }}</span>
                    <h3 class="text-lg font-bold text-white mt-3 mb-2 group-hover:text-indigo-300 transition line-clamp-2">{{ $post->title }}</h3>
                    <p class="text-slate-400 text-sm line-clamp-2">{{ $post->excerpt }}</p>
                    <p class="text-xs text-slate-500 mt-3">{{ $post->published_at->format('d/m/Y') }} · {{ $post->reading_time }} min</p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="text-center mt-8 sm:hidden">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-indigo-400 font-semibold">Tous les articles <i class="fas fa-arrow-right text-xs"></i></a>
        </div>
    </div>
</section>
@endif

{{-- Final CTA --}}
<section class="py-32 px-6 relative">
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <div class="glass-card p-12 lg:p-20 rounded-[3rem] bg-gradient-to-br from-indigo-900/40 via-slate-900/40 to-purple-900/40 border-indigo-500/20">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-8">Reprenez le contrôle total de votre entreprise</h2>
            <p class="text-slate-400 text-lg mb-10 max-w-2xl mx-auto">Plus de 500 gestionnaires ont abandonné leurs tableurs Excel pour la puissance de FRECORP. Pourquoi pas vous ?</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://app.frecorp.fr/admin/register" class="bg-white text-slate-950 px-10 py-5 rounded-2xl font-bold text-lg hover:bg-indigo-50 transition shadow-2xl inline-flex items-center justify-center gap-2">
                    <span>Créer mon compte gratuit</span><i class="fas fa-arrow-right"></i>
                </a>
                <a href="mailto:contact@frecorp.fr" class="glass-card glass-card-hover px-10 py-5 rounded-2xl font-bold text-lg inline-flex items-center justify-center gap-2">
                    <i class="fas fa-envelope"></i><span>Nous contacter</span>
                </a>
            </div>
            <div class="mt-8 text-xs text-slate-500 font-semibold uppercase tracking-widest">
                <i class="fas fa-shield-check mr-2 text-indigo-500"></i> Données hébergées en France 🇫🇷 • Sans carte bancaire • RGPD Compliant
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Active nav on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => { if (pageYOffset >= s.offsetTop - 100) current = s.getAttribute('id'); });
        navLinks.forEach(l => {
            l.classList.remove('text-white','bg-indigo-500/20');
            if (l.getAttribute('href') === '#' + current) l.classList.add('text-white','bg-indigo-500/20');
        });
    });
</script>
@endsection
