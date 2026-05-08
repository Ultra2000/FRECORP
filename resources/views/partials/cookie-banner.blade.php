{{--
    Bandeau cookies conforme CNIL/ePrivacy.
    - Stockage du choix dans localStorage (1 an).
    - 3 actions : Tout accepter, Tout refuser, Personnaliser.
    - Aucun cookie tiers chargé tant que l'utilisateur n'a pas consenti.
--}}
<div id="cookie-banner"
     class="fixed bottom-0 left-0 right-0 z-[60] hidden p-4 sm:p-6"
     role="dialog"
     aria-labelledby="cookie-banner-title"
     aria-describedby="cookie-banner-desc">
    <div class="max-w-5xl mx-auto bg-slate-900/95 backdrop-blur-xl border border-indigo-500/30 rounded-2xl shadow-2xl shadow-indigo-500/20 p-6">
        <div class="flex flex-col lg:flex-row items-start gap-6">
            <div class="flex-1">
                <h3 id="cookie-banner-title" class="text-white font-bold text-lg mb-2 flex items-center gap-2">
                    <i class="fas fa-cookie-bite text-indigo-400"></i>
                    Vos préférences cookies
                </h3>
                <p id="cookie-banner-desc" class="text-slate-400 text-sm">
                    Nous utilisons des cookies essentiels au fonctionnement du site. Avec votre accord, nous pourrions également utiliser des cookies de mesure d'audience pour améliorer votre expérience. Vous pouvez modifier votre choix à tout moment depuis notre <a href="{{ route('confidentialite') }}" class="text-indigo-400 hover:underline">politique de confidentialité</a>.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-2 w-full lg:w-auto flex-shrink-0">
                <button type="button"
                        id="cookie-refuse"
                        class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-medium transition border border-slate-700">
                    Tout refuser
                </button>
                <button type="button"
                        id="cookie-customize"
                        class="px-5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 text-sm font-medium transition border border-slate-700">
                    Personnaliser
                </button>
                <button type="button"
                        id="cookie-accept"
                        class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white text-sm font-bold transition">
                    Tout accepter
                </button>
            </div>
        </div>

        {{-- Panneau de personnalisation --}}
        <div id="cookie-customize-panel" class="hidden mt-6 pt-6 border-t border-white/10 space-y-3">
            <label class="flex items-start gap-3 p-3 rounded-xl bg-slate-800/50 cursor-not-allowed opacity-80">
                <input type="checkbox" checked disabled class="mt-1 accent-indigo-500">
                <div>
                    <div class="text-white font-semibold text-sm">Cookies essentiels</div>
                    <div class="text-slate-400 text-xs">Nécessaires au fonctionnement (session, sécurité). Toujours actifs.</div>
                </div>
            </label>
            <label class="flex items-start gap-3 p-3 rounded-xl bg-slate-800/50 cursor-pointer hover:bg-slate-800/70 transition">
                <input type="checkbox" id="cookie-analytics" class="mt-1 accent-indigo-500">
                <div>
                    <div class="text-white font-semibold text-sm">Mesure d'audience</div>
                    <div class="text-slate-400 text-xs">Statistiques d'utilisation anonymisées pour améliorer le service.</div>
                </div>
            </label>
            <button type="button"
                    id="cookie-save"
                    class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-gradient-to-r from-indigo-500 to-purple-500 hover:from-indigo-600 hover:to-purple-600 text-white text-sm font-bold transition">
                Enregistrer mes préférences
            </button>
        </div>
    </div>
</div>

<script>
    (function () {
        const STORAGE_KEY = 'frecorp_cookie_consent';
        const ONE_YEAR_MS = 365 * 24 * 60 * 60 * 1000;
        const banner = document.getElementById('cookie-banner');
        const panel = document.getElementById('cookie-customize-panel');
        const analyticsCheckbox = document.getElementById('cookie-analytics');

        function saveConsent(consent) {
            const data = { consent, timestamp: Date.now() };
            try { localStorage.setItem(STORAGE_KEY, JSON.stringify(data)); } catch (e) {}
            applyConsent(consent);
            banner.classList.add('hidden');
        }

        function loadConsent() {
            try {
                const raw = localStorage.getItem(STORAGE_KEY);
                if (!raw) return null;
                const data = JSON.parse(raw);
                if (Date.now() - data.timestamp > ONE_YEAR_MS) return null;
                return data.consent;
            } catch (e) { return null; }
        }

        function applyConsent(consent) {
            // Branchement futur : si consent.analytics === true, charger les scripts d'analytics ici.
            // Exemple : if (consent.analytics) loadGoogleAnalytics();
            window.dispatchEvent(new CustomEvent('cookieConsentUpdated', { detail: consent }));
        }

        document.getElementById('cookie-accept').addEventListener('click', () => {
            saveConsent({ essential: true, analytics: true });
        });
        document.getElementById('cookie-refuse').addEventListener('click', () => {
            saveConsent({ essential: true, analytics: false });
        });
        document.getElementById('cookie-customize').addEventListener('click', () => {
            panel.classList.toggle('hidden');
        });
        document.getElementById('cookie-save').addEventListener('click', () => {
            saveConsent({ essential: true, analytics: analyticsCheckbox.checked });
        });

        // Affichage initial : seulement si pas de consentement déjà donné
        const existing = loadConsent();
        if (!existing) {
            banner.classList.remove('hidden');
        } else {
            applyConsent(existing);
        }

        // Permet d'ouvrir à nouveau le bandeau depuis n'importe quel lien <a data-cookie-settings>
        document.querySelectorAll('[data-cookie-settings]').forEach(el => {
            el.addEventListener('click', (e) => {
                e.preventDefault();
                banner.classList.remove('hidden');
                panel.classList.remove('hidden');
                if (existing) analyticsCheckbox.checked = existing.analytics === true;
            });
        });
    })();
</script>
