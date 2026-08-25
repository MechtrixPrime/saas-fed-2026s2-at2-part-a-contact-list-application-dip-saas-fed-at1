# Changing an Existing Table

Generate:

```bash
php artisan make:migration add_status_to_messages_table
```

## Add a column

```php
public function up(): void
{
    Schema::table('messages', function (Blueprint $table): void {
        $table->string('status', 20)->default('new');
    });
}

public function down(): void
{
    Schema::table('messages', function (Blueprint $table): void {
        $table->dropColumn('status');
    });
}
```

## Add multiple columns

```php
Schema::table('messages', function (Blueprint $table): void {
    $table->boolean('urgent')->default(false);
    $table->timestamp('archived_at')->nullable();
});
```

## Rename a column

```php
Schema::table('messages', function (Blueprint $table): void {
    $table->renameColumn('name', 'sender_name');
});
```

## Change a column

```php
Schema::table('messages', function (Blueprint $table): void {
    $table->string('subject', 255)->change();
});
```
