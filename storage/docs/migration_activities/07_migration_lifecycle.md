# Migration Lifecycle

```bash
php artisan migrate:status
php artisan migrate
php artisan db:show
php artisan db:table topics
php artisan db:table messages
php artisan migrate:rollback
php artisan migrate
```

Development-only destructive rebuild:

```bash
php artisan migrate:fresh
```

Recommended cycle:

```text
ERD
 ↓
Migration
 ↓
Migrate
 ↓
Inspect
 ↓
Rollback
 ↓
Inspect
 ↓
Migrate Again
 ↓
Verify
```
