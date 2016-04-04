<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Request;
use App\Supplier;
use App\User;

use Illuminate\Support\Facades\Hash;


class SupplierController extends Controller
{
	public function store(Request $request)
    {

        $data = $request->all();
  
        // Supplier::create($data);
        // User::create($data);
        

		$hashed_random_password = Hash::make(str_random(8));
		$data["password"] = $hashed_random_password;
		// User::create($data);

		$data["role"] = 2;
		


      	return $data;

      	// return back();

    }

}

