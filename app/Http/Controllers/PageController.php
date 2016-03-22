<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function showLoginView()
    {
        return view('login');
    }

    public function showDashboardView()
    {
        return view('dashboard');
    }
}
