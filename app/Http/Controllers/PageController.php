<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function showLoginView()
    {
        return view('auth.login');
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

    public function showCreateView()
    {
        return view('create');
    }

    public function showArrivaldateView()
    {
        return view('arrivaldate');
    }

    public function showDeliveriesView()
    {
        return view('deliveries');
    }

    public function showEditView()
    {
        return view('edit');
    }

    public function showRegisterTransportView()
    {
      return view('registertransport');
    }

}
