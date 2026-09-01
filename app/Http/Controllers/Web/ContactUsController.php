<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

// use App\Http\Requests\StoreContactUsRequest;
// use App\Models\Message;
// use App\Models\Topic;

final class ContactUsController extends Controller
{
    public function index(): View
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
        return view('web.static.contact-us', compact('topics'));
    }

    public function thankyou(): View
    {
        return view('web.static.thank-you');
    }
}
