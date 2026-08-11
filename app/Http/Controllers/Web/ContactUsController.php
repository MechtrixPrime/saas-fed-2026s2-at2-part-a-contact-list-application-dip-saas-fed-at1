<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

// use App\Http\Controllers\Controller;
// use App\Http\Requests\StoreContactUsRequest;
// use App\Models\Message;
// use App\Models\Topic;

final class ContactUsController
{
    public function index()
    {
        // Get the topics
        // $topics = Topic::all();
        $topics = [
            [
                'id' => 1,
                'name' => 'Laravel Basics',
                'description' => 'Introduction to Laravel fundamentals',
            ],
            [
                'id' => 2,
                'name' => 'Blade Components',
                'description' => 'Building reusable UI components',
            ],
            [
                'id' => 3,
                'name' => 'Eloquent ORM',
                'description' => 'Working with models and relationships',
            ],
            [
                'id' => 4,
                'name' => 'Testing',
                'description' => 'Feature and unit testing in Laravel',
            ],
            [
                'id' => 5,
                'name' => 'API Development',
                'description' => 'Creating RESTful APIs',
            ],
        ];

        // return the contact-us view with the topics
        return view('topics.index', compact('topics'));
    }
}
