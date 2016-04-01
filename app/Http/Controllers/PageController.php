<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Supplier;

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

        $user = Auth::user();
        return view('confirmed', compact('user'));
    }

    public function showCreateView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        return view('create', compact('user'));
    }

    public function showArrivaldateView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        $supplier = Supplier::findOrFail($user->supplier_id);

        return view('arrivaldate', compact('user', 'supplier'));
    }

    public function showDeliveriesView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        return view('deliveries', compact('user'));
    }

    public function showEditView()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();
        return view('edit', compact('user'));
    }

    public function showRegisterTransportView()
    {
      return view('registertransport');
    }

}
