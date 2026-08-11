<?php

declare(strict_types=1);

use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\StaticPageController;
use App\Http\Controllers\Client\ContactController;
use Illuminate\Support\Facades\Route;

Route::name("web.static.")->group(function (): void {
    Route::get("/about", [StaticPageController::class, "about"])->name("about");

    Route::get("/contact", [StaticPageController::class, "contact"])->name(
        "contact",
    );

    Route::get("/privacy", [StaticPageController::class, "privacy"])->name(
        "privacy",
    );

    Route::get("/terms-and-conditions", [
        StaticPageController::class,
        "terms",
    ])->name("terms-and-conditions");
});

Route::get("/contacts/{name}", [ContactController::class, "index"]);
