<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;



class SupplierController extends Controller
{
	public function store(Request $request)
    {

$input = Request::all();
        // dd($input);

	$supplier->name = $input['name'];
	$supplier->favorite = $input['favorite'];
	$supplier = Supplier::create();

	$supplier->email = $input['email'];
	$hashed_random_password = Hash::make(str_random(8));
	$supplier->role = 2;
	$supplier->supplier_id = $supplier->id;
	$supplier->save();


User::create();



    }

}

// $hashed_random_password = Hash::make(str_random(8));


//     	$data = $request->all();
      
//      	return $data;