<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use Illuminate\Contracts\View\View;

final class ContactController
{
    public function index(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
        ];

        return view('client.contacts.index', ['contact' => $contact]);
    }

    public function show(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
        ];

        return view('client.contacts.show', ['contact' => $contact]);
    }

    public function create(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
        ];

        return view('client.contacts.create', ['contact' => $contact]);
    }

    public function edit(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
        ];

        return view('client.contacts.edit', ['contact' => $contact]);
    }
}
