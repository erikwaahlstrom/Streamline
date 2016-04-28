<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class EdituserController extends Controller
{

    //Radera användare
    public function delete(Request $request)
    {

    	$data = $request->all();
        User::destroy($data['user_id']);

        return redirect('/editUser');

    }

    //hämtar användare
    public function index()
    {

    	$users = User::where('role', '=', '1')->orWhere('role', '=', '3')->get();

    	return view ('editUser', compact('users'));

    }

    //uppdatera användare
    public function update(Request $request)
    {

    	$data = $request->all();

    	$user = User::findOrFail($data['user_id']);

		$user->role = $data['role'];
		$user->save();

    	return redirect('editUser');

    }

}
