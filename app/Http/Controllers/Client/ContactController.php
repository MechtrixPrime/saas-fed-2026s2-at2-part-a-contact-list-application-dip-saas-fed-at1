<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;

final class ContactController
{
    public function index()
    {
        // dd($name);
        // return "Welcome to the index method in the contact controller {$name}";

        return view('client.contacts.index', []);
    }

    // public function read_contact($id)
    // {
    //     return "Welcome to the index method in the contact controller";
    // }
}
