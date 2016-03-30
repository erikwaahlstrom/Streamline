<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class PageController extends Controller
{
    public function showLoginView()
    {
        return view('auth.login');
    }

    public function showDashboardView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function showRegisterView()
    {
        return view('register');
    }

    public function showConfirmedView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('confirmed');
    }

    public function showCreateView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('create');
    }

    public function showArrivaldateView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('arrivaldate');
    }

    public function showDeliveriesView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('deliveries');
    }

    public function showEditView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        
        return view('edit');
    }

    public function showRegisterTransportView()
    {
      return view('registertransport');
    }

}
