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

    public function showRegisterView()
    {
        return view('register');
    }

    public function showConfirmedView()
    {
        return view('confirmed');
    }

}
