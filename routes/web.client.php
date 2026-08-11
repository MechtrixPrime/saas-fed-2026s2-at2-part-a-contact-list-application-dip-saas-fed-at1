<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ContactController;


Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create']);
Route::get('/contacts/{contact}', [ContactController::class, 'show']);
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit']);
// Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);
// Route::post('/contacts/{contact}', [ContactController::class, 'create']);
// Route::patch('/contacts/{contact}', [ContactController::class, 'update']);
