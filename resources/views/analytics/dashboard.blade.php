<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard | FRECORP</title>
    <meta name="robots" content="noindex, nofollow">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f8fafc; }
        .stat-card { background: white; border: 1px solid #e2e8f0; border-radius: 1rem; padding: 1.25rem 1.5rem; }
        .chart-card { background: white; border: 1px solid #e2e8f0; border-radius: 1rem; padding: 1.5rem; }
        .table-row:hover { background: #f8fafc; }
    </style>
</head>
<body class="min-h-screen">
    {{-- Header --}}
    <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center">
                    <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h1 class="text-lg font-bold text-slate-900">FRECORP Analytics</h1>
            </div>
            <div class="flex items-center gap-3">
                {{-- Period selector --}}
                <div class="flex bg-slate-100 rounded-lg p-0.5 text-sm">
                    @foreach([7 => '7j', 14 => '14j', 30 => '30j', 90 => '90j'] as $d => $label)
                        <a href="?days={{ $d }}"
                           class="px-3 py-1.5 rounded-md font-medium transition {{ $days === $d ? 'bg-white shadow-sm text-indigo-600' : 'text-slate-500 hover:text-slate-700' }}">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('analytics.logout') }}" class="text-sm text-slate-400 hover:text-red-500 transition ml-2" title="Déconnexion">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-6 space-y-6">
        {{-- KPI Cards --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="stat-card">
                <p class="text-sm text-slate-500 mb-1">Pages vues</p>
                <p class="text-2xl font-bold text-slate-900">{{ number_format($totalViews) }}</p>
            </div>
            <div class="stat-card">
                <p class="text-sm text-slate-500 mb-1">Visiteurs uniques</p>
                <p class="text-2xl font-bold text-slate-900">{{ number_format($uniqueVisitors) }}</p>
            </div>
            <div class="stat-card">
                <p class="text-sm text-slate-500 mb-1">Conversions</p>
                <p class="text-2xl font-bold text-emerald-600">{{ number_format($totalConversions) }}</p>
            </div>
            <div class="stat-card">
                <p class="text-sm text-slate-500 mb-1">Taux de conversion</p>
                <p class="text-2xl font-bold text-indigo-600">{{ $conversionRate }}%</p>
            </div>
        </div>

        {{-- Traffic Chart --}}
        <div class="chart-card">
            <h2 class="text-base font-bold text-slate-900 mb-4">Trafic ({{ $days }} derniers jours)</h2>
            <canvas id="trafficChart" height="90"></canvas>
        </div>

        {{-- Two columns: Sources + Pages --}}
        <div class="grid lg:grid-cols-2 gap-6">
            {{-- Top Sources --}}
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Sources de trafic</h2>
                @if($topSources->isEmpty())
                    <p class="text-sm text-slate-400">Aucune donnée</p>
                @else
                    <div class="space-y-3">
                        @foreach($topSources as $source)
                            @php $pct = $totalViews > 0 ? round(($source->views / $totalViews) * 100) : 0; @endphp
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="font-medium text-slate-700">{{ $source->label }}</span>
                                    <span class="text-slate-500">{{ $source->visitors }} visiteurs · {{ $pct }}%</span>
                                </div>
                                <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full rounded-full {{ match($source->source_type) { 'organic' => 'bg-emerald-500', 'social' => 'bg-blue-500', 'direct' => 'bg-slate-400', 'paid' => 'bg-amber-500', 'email' => 'bg-purple-500', default => 'bg-indigo-500' } }}" style="width: {{ max(2, $pct) }}%"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Top Pages --}}
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Pages les plus vues</h2>
                @if($topPages->isEmpty())
                    <p class="text-sm text-slate-400">Aucune donnée</p>
                @else
                    <div class="overflow-hidden">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="text-left text-slate-500 border-b border-slate-100">
                                    <th class="pb-2 font-medium">Page</th>
                                    <th class="pb-2 font-medium text-right">Vues</th>
                                    <th class="pb-2 font-medium text-right">Visiteurs</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($topPages as $page)
                                    <tr class="table-row border-b border-slate-50">
                                        <td class="py-2 text-slate-700 font-medium" title="{{ $page->path }}">{{ Str::limit($page->label, 35) }}</td>
                                        <td class="py-2 text-right text-slate-600">{{ number_format($page->views) }}</td>
                                        <td class="py-2 text-right text-slate-600">{{ number_format($page->visitors) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        {{-- Two columns: Referrers + Countries --}}
        <div class="grid lg:grid-cols-2 gap-6">
            {{-- Top Referrers --}}
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Top Referrers</h2>
                @if($topReferrers->isEmpty())
                    <p class="text-sm text-slate-400">Aucun referrer externe</p>
                @else
                    <div class="space-y-2">
                        @foreach($topReferrers as $ref)
                            <div class="flex items-center justify-between py-1.5 border-b border-slate-50 table-row px-2 rounded">
                                <div class="flex items-center gap-2">
                                    <img src="https://www.google.com/s2/favicons?domain={{ $ref->referrer_domain }}&sz=16" alt="" class="w-4 h-4 rounded" onerror="this.style.display='none'">
                                    <span class="text-sm font-medium text-slate-700">{{ $ref->label }}</span>
                                </div>
                                <span class="text-sm text-slate-500">{{ $ref->visitors }} visiteurs</span>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Countries --}}
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Pays</h2>
                @if($countries->isEmpty())
                    <p class="text-sm text-slate-400">Aucune donnée</p>
                @else
                    <div class="space-y-2">
                        @foreach($countries as $country)
                            <div class="flex items-center justify-between py-1.5 border-b border-slate-50 table-row px-2 rounded">
                                <span class="text-sm font-medium text-slate-700">{{ $country->flag }} {{ $country->name }}</span>
                                <span class="text-sm text-slate-500">{{ $country->visitors }} visiteurs</span>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        {{-- Devices + Browsers --}}
        <div class="grid lg:grid-cols-2 gap-6">
            {{-- Devices --}}
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Appareils</h2>
                <div class="grid grid-cols-3 gap-4">
                    @foreach($devices as $device)
                        @php $pct = $totalViews > 0 ? round(($device->views / $totalViews) * 100) : 0; @endphp
                        <div class="text-center p-3 bg-slate-50 rounded-xl">
                            <p class="text-2xl mb-1">{{ match($device->device) { 'desktop' => '💻', 'mobile' => '📱', 'tablet' => '📋', default => '❓' } }}</p>
                            <p class="text-lg font-bold text-slate-900">{{ $pct }}%</p>
                            <p class="text-xs text-slate-500">{{ ucfirst($device->device) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Browsers --}}
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Navigateurs</h2>
                <canvas id="browserChart" height="140"></canvas>
            </div>
        </div>

        {{-- UTM Campaigns --}}
        @if($utmCampaigns->isNotEmpty())
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Campagnes UTM</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="text-left text-slate-500 border-b border-slate-200">
                                <th class="pb-2 font-medium">Campagne</th>
                                <th class="pb-2 font-medium">Source</th>
                                <th class="pb-2 font-medium">Medium</th>
                                <th class="pb-2 font-medium text-right">Vues</th>
                                <th class="pb-2 font-medium text-right">Visiteurs</th>
                                <th class="pb-2 font-medium text-right">Conversions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($utmCampaigns as $campaign)
                                <tr class="table-row border-b border-slate-50">
                                    <td class="py-2 font-medium text-slate-700">{{ $campaign->utm_campaign }}</td>
                                    <td class="py-2 text-slate-600">{{ $campaign->utm_source ?? '—' }}</td>
                                    <td class="py-2">
                                        <span class="text-xs font-medium px-2 py-0.5 rounded-full {{ match($campaign->utm_medium) { 'cpc' => 'bg-amber-100 text-amber-700', 'social' => 'bg-blue-100 text-blue-700', 'email' => 'bg-purple-100 text-purple-700', default => 'bg-slate-100 text-slate-600' } }}">
                                            {{ $campaign->utm_medium ?? '—' }}
                                        </span>
                                    </td>
                                    <td class="py-2 text-right text-slate-600">{{ number_format($campaign->views) }}</td>
                                    <td class="py-2 text-right text-slate-600">{{ number_format($campaign->visitors) }}</td>
                                    <td class="py-2 text-right font-medium {{ $campaign->conversions > 0 ? 'text-emerald-600' : 'text-slate-400' }}">{{ $campaign->conversions }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        {{-- Conversions by type --}}
        @if($conversionsByType->isNotEmpty())
            <div class="chart-card">
                <h2 class="text-base font-bold text-slate-900 mb-4">Conversions par type</h2>
                <div class="grid grid-cols-3 gap-4">
                    @foreach($conversionsByType as $conv)
                        <div class="text-center p-4 bg-emerald-50 rounded-xl border border-emerald-100">
                            <p class="text-2xl mb-1">{{ match($conv->conversion_type) { 'trial' => '🚀', 'demo' => '🎬', 'newsletter' => '📧', default => '✅' } }}</p>
                            <p class="text-xl font-bold text-emerald-700">{{ $conv->total }}</p>
                            <p class="text-xs text-emerald-600 font-medium">{{ match($conv->conversion_type) { 'trial' => 'Essai gratuit', 'demo' => 'Demande démo', 'newsletter' => 'Newsletter', default => $conv->conversion_type } }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Footer --}}
        <p class="text-center text-xs text-slate-400 pb-6">
            Données collectées en respectant le RGPD — Aucune donnée personnelle stockée, IPs hashées
        </p>
    </main>

    {{-- Charts --}}
    <script>
        // Traffic chart
        const trafficCtx = document.getElementById('trafficChart').getContext('2d');
        new Chart(trafficCtx, {
            type: 'line',
            data: {
                labels: {!! json_encode($trafficByDay->pluck('date')->map(fn($d) => \Carbon\Carbon::parse($d)->format('d/m'))) !!},
                datasets: [
                    {
                        label: 'Pages vues',
                        data: {!! json_encode($trafficByDay->pluck('views')) !!},
                        borderColor: '#6366f1',
                        backgroundColor: 'rgba(99, 102, 241, 0.08)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 2,
                        pointHoverRadius: 5,
                    },
                    {
                        label: 'Visiteurs uniques',
                        data: {!! json_encode($trafficByDay->pluck('visitors')) !!},
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.08)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 2,
                        pointHoverRadius: 5,
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'top', labels: { usePointStyle: true, padding: 15 } } },
                scales: {
                    y: { beginAtZero: true, grid: { color: '#f1f5f9' }, ticks: { font: { size: 11 } } },
                    x: { grid: { display: false }, ticks: { font: { size: 11 }, maxTicksLimit: 15 } }
                },
                interaction: { intersect: false, mode: 'index' }
            }
        });

        // Browser chart
        @if($browsers->isNotEmpty())
        const browserCtx = document.getElementById('browserChart').getContext('2d');
        new Chart(browserCtx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($browsers->pluck('browser')) !!},
                datasets: [{
                    data: {!! json_encode($browsers->pluck('views')) !!},
                    backgroundColor: ['#6366f1', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6'],
                    borderWidth: 0,
                    hoverOffset: 6
                }]
            },
            options: {
                responsive: true,
                cutout: '65%',
                plugins: {
                    legend: { position: 'right', labels: { usePointStyle: true, padding: 12, font: { size: 12 } } }
                }
            }
        });
        @endif
    </script>
</body>
</html>
