<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class StaticPageController extends Controller
{
    public function about(): View
    {
        return view("web.static.about");
    }
}
