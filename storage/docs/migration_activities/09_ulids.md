# ULIDs in Laravel Migrations

Laravel migrations can use **ULIDs** instead of auto-incrementing integer IDs.

A ULID is a 26-character identifier that can be generated without relying on the database to allocate the next integer.

## ULID Primary Key

Instead of:

```php
$table->id();
```

use:

```php
$table->ulid('id')->primary();
```

Example:

```php
Schema::create('topics', function (Blueprint $table): void {
    $table->ulid('id')->primary();
    $table->string('name', 50)->unique();
    $table->string('description')->nullable();
    $table->boolean('available')->default(true);
    $table->timestamps();
});
```

## ULID Foreign Key

If `topics.id` is a ULID, the related foreign key must use a compatible ULID type.

```php
Schema::create('messages', function (Blueprint $table): void {
    $table->ulid('id')->primary();

    $table->foreignUlid('topic_id')
        ->constrained('topics')
        ->cascadeOnDelete();

    $table->string('name', 100);
    $table->string('email');
    $table->string('subject', 128);
    $table->text('message');
    $table->timestamp('read_at')->nullable();
    $table->timestamps();
});
```

The relationship remains:

```text
topics.id
    ↓
messages.topic_id
```

but both keys now use ULIDs.

## Important Rule

Match the key types.

```text
Integer Primary Key
        ↓
foreignId()

ULID Primary Key
        ↓
foreignUlid()
```

Do not create a ULID foreign key that references an integer primary key, or an integer foreign key that references a ULID primary key.

## Comparison

### Integer IDs

```php
$table->id();

$table->foreignId('topic_id')
    ->constrained();
```

### ULIDs

```php
$table->ulid('id')->primary();

$table->foreignUlid('topic_id')
    ->constrained('topics');
```

ULIDs are another database design choice. Use the identifier strategy selected for the application rather than changing key types simply because Laravel supports them.
