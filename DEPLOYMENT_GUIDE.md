# Deployment Guide to takeitcloudy.com

This guide will help you configure and upload your Laravel project to your hosting environment.

## 1. Prepare Configuration File
On your server (via File Manager or FTP), you will need to create or edit the `.env` file in the root of your project. Use the following configuration which has been pre-filled with your provided credentials:

```ini
APP_NAME=Elitehost
APP_ENV=production
APP_KEY=base64:YOUR_GENERATED_KEY_HERE
APP_DEBUG=false
APP_URL=https://takeitcloudy.com

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=u299367872_takeitcloudy
DB_USERNAME=u299367872_takeitcloudy
DB_PASSWORD="/8cz?!vG"

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mail.takeitcloudy.com
MAIL_PORT=465
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="hello@takeitcloudy.com"
MAIL_FROM_NAME="${APP_NAME}"

VITE_APP_NAME="${APP_NAME}"
```

> **IMPORTANT**: You must generate a new application key.
> If you have SSH access on your server, run: `php artisan key:generate`
> If not, run it locally (`php artisan key:generate --show`) and copy the key to the `APP_KEY` line in the `.env` file on the server.

## 2. Prepare Files for Upload
1. Open your local terminal in the project directory.
2. Run `composer install --optimize-autoloader --no-dev` to install production dependencies (if you haven't already).
   - *Note: If you cannot run composer, you can zip `vendor` folder, but it is better to run composer on the server if possible.*
3. Compress all files in the project directory (including `vendor`, `app`, `public`, etc.) into a `project.zip` file.
   - **Exclude**: `.git`, `node_modules`, `.env` (local), `tests`.

## 3. Upload to Server
1. Log in to your hosting Control Panel (cPanel, hPanel, etc.).
2. Go to **File Manager**.
3. Navigate to the `public_html` directory (or the specific subdirectory for your domain).
4. Upload `project.zip`.
5. Extract `project.zip`.

## 4. Folder Structure Adjustment (Critical for Shared Hosting)
Laravel expects the entry point to be in `public/index.php`. On shared hosting, you often want the content of `public` to be in `public_html`.

**Option A (Recommended if you can point domain to /public folder):**
1. Go to your hosting "Domain Management" or "Document Root" settings.
2. Change the document root for your domain to `/path/to/your/project/public`.

**Option B (If you must use public_html root):**
1. Move the *contents* of the `public` folder to `public_html`.
2. Move the rest of the project files (app, bootstrap, config, vendor, etc.) to a separate folder outside `public_html` (e.g., `laravel_core`).
3. Edit `public_html/index.php`:
   - Change: `require __DIR__.'/../vendor/autoload.php';`
   - To: `require __DIR__.'/../laravel_core/vendor/autoload.php';`
   - Change: `$app = require_once __DIR__.'/../bootstrap/app.php';`
   - To: `$app = require_once __DIR__.'/../laravel_core/bootstrap/app.php';`

## 5. Database Setup
1. You already have the database credentials.
2. If you have SSH access:
   - Run `php artisan migrate --force` to create the tables.
3. If you do NOT have SSH access:
   - Run `php artisan migrate` **locally** on your computer (make sure your local DB is set up).
   - Use a tool like **HeidiSQL**, **TablePlus**, or **phpMyAdmin** (locally) to "Export" the database structure and data to a `.sql` file.
   - Go to your host's **phpMyAdmin**.
   - Select database `u299367872_takeitcloudy`.
   - Click **Import** and upload your `.sql` file.

## 6. Set Permissions
Ensure the `storage` and `bootstrap/cache` directories are writable:
- `storage` -> 775 or 777
- `bootstrap/cache` -> 775 or 777

## 7. Final Check
Visit `https://takeitcloudy.com`. If you see errors, check `storage/logs/laravel.log` for details.
