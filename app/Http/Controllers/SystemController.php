<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function dashboardView()
    {
        return view('dashboard');
    }

    public function favoritesView()
    {
        return view('favorites');
    }

    public function listsView()
    {
        return view('lists');
    }
}
