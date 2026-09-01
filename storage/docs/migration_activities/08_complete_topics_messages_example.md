# Complete Topics and Messages Example

## Topics

```php
Schema::create('topics', function (Blueprint $table): void {
    $table->id();
    $table->string('name', 50)->unique();
    $table->string('description')->nullable();
    $table->boolean('available')->default(true);
    $table->timestamps();
});
```

## Messages

```php
Schema::create('messages', function (Blueprint $table): void {
    $table->id();

    $table->foreignId('topic_id')
        ->constrained()
        ->cascadeOnDelete();

    $table->string('name', 100);
    $table->string('email');
    $table->string('subject', 128);
    $table->text('message');
    $table->timestamp('read_at')->nullable();
    $table->boolean('urgent')->default(false);
    $table->timestamps();

    $table->index(['topic_id', 'read_at']);
});
```

## Relationship

```text
TOPIC
----------------
PK id

        1
        │
        └──────────────< many

MESSAGE
----------------
PK id
FK topic_id
```

Demonstrates keys, foreign keys, cascading delete, nullable values, defaults, unique constraints, composite indexes and timestamps.
