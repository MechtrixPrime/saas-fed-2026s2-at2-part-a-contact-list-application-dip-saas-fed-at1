<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

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
}
