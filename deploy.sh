#!/bin/bash
# =============================================================================
# Script de déploiement frecorp.fr (O2switch mutualisé)
# Usage : ./deploy.sh
# =============================================================================

set -e  # Stop au premier échec

echo "🚀 Déploiement frecorp.fr — début"
echo "=================================="

# Mode maintenance (utilisateurs voient une page d'attente)
echo "→ Activation du mode maintenance..."
php artisan down --render="errors::503" || true

# Pull dernière version
echo "→ Git pull..."
git pull origin main

# Dépendances PHP (sans dev, optimisées)
echo "→ Composer install..."
composer install --no-dev --optimize-autoloader --no-interaction

# Migrations DB (forcé en prod)
echo "→ Migrations base de données..."
php artisan migrate --force

# Lien symbolique storage (idempotent)
echo "→ Lien symbolique storage..."
php artisan storage:link 2>/dev/null || true

# Vider tous les caches
echo "→ Vidage des caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Recompiler les caches de production
echo "→ Compilation des caches prod..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# Permissions storage et cache
echo "→ Permissions..."
chmod -R 775 storage bootstrap/cache 2>/dev/null || true

# Sortie du mode maintenance
echo "→ Sortie du mode maintenance..."
php artisan up

echo ""
echo "✅ Déploiement terminé"
echo "=================================="
echo "Vérifie : https://frecorp.fr"
