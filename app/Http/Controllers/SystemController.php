<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function favorites()
    {
        return view('favorites');
    }

    public function lists()
    {
        return view('lists');
    }
}
