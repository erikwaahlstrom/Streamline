<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
	public function store(Request $request)
	{

		//Skapar användare
        $data = $request->all();

        User::create($data);
      	

        //Ger användaren feedback
      	return redirect('createUser')->with('status', 'En ny användare har skapats.');


    }
}
