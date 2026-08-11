<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ContactController;


Route::get('/contacts', [ContactController::class, 'index']);
