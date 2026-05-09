# Déploiement — frecorp.fr (O2switch mutualisé)

Guide pratique pour déployer ce projet Laravel sur O2switch.
Le déploiement se fait par `git pull` ; les assets Vite sont versionnés.

---

## A. Première installation (à faire une seule fois)

### A.1 — Préparer le local

```powershell
# Sur ta machine, depuis frecorp-laravel/
npm run build                  # Compile les assets dans public/build/
git add public/build/
git commit -m "Build pour déploiement"
git push origin main
```

### A.2 — Cloner le repo sur O2switch

Connecte-toi en SSH (cPanel → Terminal SSH ou `ssh USER@frecorp.fr`).

```bash
cd ~                                                      # Home directory
git clone https://github.com/Ultra2000/FRECORP.git frecorp.fr
cd frecorp.fr
```

### A.3 — Configurer le document root

Dans cPanel → **Domaines** → modifier le document root du domaine `frecorp.fr` pour pointer vers :

```
/home/USERNAME/frecorp.fr/public
```

(Remplacer `USERNAME` par ton nom d'utilisateur cPanel.)

### A.4 — Installer les dépendances PHP

```bash
cd ~/frecorp.fr
composer install --no-dev --optimize-autoloader
```

### A.5 — Configurer .env

```bash
cp .env.production.example .env
nano .env
# Remplir : APP_KEY, DB_DATABASE (chemin absolu), MAIL_*, etc.
```

Générer la clé d'application :

```bash
php artisan key:generate
```

### A.6 — Préparer la base de données SQLite

```bash
mkdir -p database
touch database/database.sqlite
chmod 664 database/database.sqlite
chmod 775 database

php artisan migrate --force
php artisan db:seed --force          # Si tu as des seeders à exécuter
```

### A.7 — Lien symbolique storage

```bash
php artisan storage:link
```

### A.8 — Permissions

```bash
chmod -R 775 storage bootstrap/cache
```

### A.9 — Cache de production

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
```

### A.10 — Créer le premier utilisateur admin

```bash
php artisan tinker
```

```php
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'contact@frecorp.fr',
    'password' => bcrypt('CHANGE_THIS_PASSWORD'),
]);
exit
```

### A.11 — Vérifier dans le navigateur

- https://frecorp.fr → home
- https://frecorp.fr/blog → blog
- https://frecorp.fr/admin → login Filament
- https://frecorp.fr/sitemap.xml → sitemap XML
- https://frecorp.fr/robots.txt → robots.txt

---

## B. Déploiements suivants (workflow standard)

### B.1 — En local

```powershell
# Modifier le code, tester...
npm run build                  # Si CSS/JS modifiés
git add .
git commit -m "Feature : ..."
git push origin main
```

### B.2 — Sur le serveur

```bash
cd ~/frecorp.fr
bash deploy.sh
```

(Le script `deploy.sh` automatise tout — voir section C.)

---

## C. Script `deploy.sh`

Le script est versionné dans le repo. Sur le serveur, après le premier clone :

```bash
chmod +x deploy.sh
```

Pour chaque déploiement :

```bash
./deploy.sh
```

---

## D. Sauvegardes SQLite (cron O2switch)

### D.1 — Script de sauvegarde

Crée `~/backup-frecorp.sh` :

```bash
#!/bin/bash
BACKUP_DIR=~/backups/frecorp
DB=~/frecorp.fr/database/database.sqlite
mkdir -p "$BACKUP_DIR"
DATE=$(date +%Y-%m-%d_%H-%M)
sqlite3 "$DB" ".backup '$BACKUP_DIR/database_$DATE.sqlite'"
# Garder uniquement les 30 dernières sauvegardes
ls -1t "$BACKUP_DIR"/database_*.sqlite | tail -n +31 | xargs -r rm
```

```bash
chmod +x ~/backup-frecorp.sh
```

### D.2 — Cron quotidien

cPanel → **Tâches Cron** → ajouter :

- Fréquence : `0 3 * * *` (chaque jour à 3h du matin)
- Commande : `/bin/bash ~/backup-frecorp.sh`

---

## E. Checklist post-déploiement

- [ ] `APP_DEBUG=false` (sinon stack traces visibles en cas d'erreur)
- [ ] `APP_ENV=production`
- [ ] HTTPS forcé (test : http:// redirige automatiquement vers https://)
- [ ] Test inscription / connexion admin
- [ ] Test création d'un article blog (avec image à la une)
- [ ] Test envoi d'email transactionnel
- [ ] Sitemap accessible et valide (test : https://www.xml-sitemaps.com/validate-xml-sitemap.html)
- [ ] Google Search Console : déclarer la propriété `frecorp.fr` et soumettre le sitemap
- [ ] Cron de sauvegarde activé et testé une fois manuellement
- [ ] Vérifier les permissions des fichiers `.env` (chmod 600)

---

## F. Rollback rapide en cas de problème

```bash
cd ~/frecorp.fr
git log --oneline -10                    # Identifier le commit stable
git reset --hard COMMIT_HASH
php artisan config:cache
php artisan view:cache
```

Pour la base de données :

```bash
cp ~/backups/frecorp/database_YYYY-MM-DD_HH-MM.sqlite ~/frecorp.fr/database/database.sqlite
```
