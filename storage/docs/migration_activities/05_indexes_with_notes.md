# Indexes

## Standard index

Creates an index to speed up searches and filtering on the `subject`
column.

``` php
$table->string('subject')->index();
```

or:

``` php
$table->index('subject');
```

## Unique index

Creates an index and prevents duplicate values from being stored in the
column.

``` php
$table->string('name')->unique();
```

## Composite index

Creates one index across multiple columns that are commonly queried
together.

``` php
$table->index(['topic_id', 'read_at']);
```

## Named index

Creates an index with a custom name, making it easier to identify or
reference later.

``` php
$table->index(
    ['topic_id', 'read_at'],
    'messages_topic_read_index'
);
```

## Drop index

Removes an existing index when it is no longer required.

``` php
$table->dropIndex(['topic_id', 'read_at']);
```

Do not index every field automatically.
