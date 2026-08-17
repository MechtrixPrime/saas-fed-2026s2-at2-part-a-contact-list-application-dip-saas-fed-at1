<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

final class ContactController extends Controller
{
    public function index(string $name)
    {
        // dd($name);

        // return "Welcome to the index method in the contact controller {$name}";
        return view("contacts.index", ["name" => $name]);
    }
=======
use Illuminate\Http\Request;
use Illuminate\View\View;

final class ContactController
{
    public function index(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
            'email' => 'alice@example.com',
            'phone' => '0412 345 678',
            'active' => true,
        ];

        return view('client.contacts.index', ['contact' => $contact]);
    }

    public function show(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
            'email' => 'alice@example.com',
            'phone' => '0412 345 678',
            'active' => true,
        ];

        return view('client.contacts.show', ['contact' => $contact]);
    }

    public function create(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
            'email' => 'alice@example.com',
            'phone' => '0412 345 678',
            'active' => true,
        ];

        return view('client.contacts.create', ['contact' => $contact]);
    }

    public function edit(): View
    {
        // dd($name);
        $contact = [
            'id' => 1,
            'name' => 'Alice Smith',
            'email' => 'alice@example.com',
            'phone' => '0412 345 678',
            'active' => true,
        ];

        return view('client.contacts.edit', ['contact' => $contact]);
    }


    // public function read_contact($id)
    // {
    //     return "Welcome to the index method in the contact controller";
    // }
>>>>>>> feat/session4
}
