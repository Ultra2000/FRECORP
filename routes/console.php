<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('analytics:cleanup {--days=90 : Nombre de jours à conserver}', function () {
    $days = (int) $this->option('days');
    $deleted = \App\Models\PageVisit::where('created_at', '<', now()->subDays($days))->delete();
    $this->info("✓ {$deleted} enregistrements supprimés (plus de {$days} jours).");
})->purpose('Supprimer les données analytics de plus de N jours');
