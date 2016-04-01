<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Supplier;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();

        $data['reference_number'] = strtr(base64_encode(openssl_random_pseudo_bytes(4)), "+/=", "XXX");
        $data['supplier'] = Supplier::findOrFail($user->supplier_id);
        // $data['supplier'] = $user->findOrFail($user->supplier_id)->supplier;


        return $data;
    }
}
