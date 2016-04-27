<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Booking;

class TransportController extends Controller
{
	public function index(Request $request)
	{

		//Posta referensnummer
	   	$data = $request->all();

	    $booking = Booking::where('reference_number', '=', $data['reference_number'])->first();

	    return view('confirmed', compact('booking'));


    }
}
