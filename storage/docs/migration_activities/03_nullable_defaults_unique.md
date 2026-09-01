# Nullable, Default and Unique

```php
Schema::create('topics', function (Blueprint $table): void {
    $table->id();
    $table->string('name', 50)->unique();
    $table->string('slug', 60)->unique();
    $table->string('description')->nullable();
    $table->boolean('available')->default(true);
    $table->unsignedInteger('priority')->default(1);
    $table->timestamps();
});
```

Use database modifiers only when they reflect the approved requirements.
