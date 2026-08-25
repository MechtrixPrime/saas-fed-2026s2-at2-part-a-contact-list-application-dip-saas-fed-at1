# Foreign Keys and Cascades

## Basic relationship

Creates `topic_id` and links it to `topics.id` using Laravel
conventions.

``` php
$table->foreignId('topic_id')->constrained();
```

## Cascade delete

Deleting a Topic automatically deletes its related Messages.

``` php
$table->foreignId('topic_id')
    ->constrained()
    ->cascadeOnDelete();
```

## Restrict delete

Prevents a Topic from being deleted while related Messages still exist.

``` php
$table->foreignId('topic_id')
    ->constrained()
    ->restrictOnDelete();
```

## Null on delete

Keeps the Message but sets `topic_id` to `NULL` when its Topic is
deleted.

``` php
$table->foreignId('topic_id')
    ->nullable()
    ->constrained()
    ->nullOnDelete();
```

## Cascade update

Updates the related `topic_id` if the referenced Topic key changes.

``` php
$table->foreignId('topic_id')
    ->constrained()
    ->cascadeOnUpdate();
```

## Explicit syntax

Creates the same foreign-key relationship without relying on Laravel's
shorter convention-based syntax.

``` php
$table->unsignedBigInteger('topic_id');

$table->foreign('topic_id')
    ->references('id')
    ->on('topics')
    ->cascadeOnDelete();
```

Choose delete/update behaviour from the business rule, not by habit.
