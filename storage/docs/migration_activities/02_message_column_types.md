# Common Column Types

```php
Schema::create('messages', function (Blueprint $table): void {
    $table->id();
    $table->string('name', 100);
    $table->string('email');
    $table->string('subject', 128);
    $table->text('message');
    $table->boolean('urgent')->default(false);
    $table->unsignedInteger('priority')->default(1);
    $table->decimal('estimated_cost', 10, 2)->nullable();
    $table->date('follow_up_date')->nullable();
    $table->dateTime('assigned_at')->nullable();
    $table->timestamp('read_at')->nullable();
    $table->json('metadata')->nullable();
    $table->timestamps();
});
```

Common types include `string`, `text`, `boolean`, `integer`, `unsignedInteger`, `decimal`, `date`, `dateTime`, `timestamp`, and `json`.
