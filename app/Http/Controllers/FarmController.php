<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class FarmController extends Controller
{
    public function home(): View
    {
        return view('farm.home');
    }

    public function operation(): View
    {
        return view('farm.operation');
    }

    public function care(): View
    {
        return view('farm.care');
    }

    public function fallback(): Response
    {
        return response()->view('farm.fallback', status: 404);
    }
}
