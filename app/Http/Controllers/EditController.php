<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\User;
use Auth;

use App\Http\Requests;

class EditController extends Controller
{
    //Hämtar användare
    public function index()
	    {
	    	if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();

	    $suppliers = Supplier::all();

	    return view('edit', compact('suppliers', 'user'));

	    }
	//Radera användare
	public function delete(Request $request)
    {
        $data = $request->all();
        Supplier::destroy($data['id']);

        return redirect('/edit');
    }
    //Uppdatera användare
    public function update(Request $request)
    {
        $data = $request->all();

        $suppliers = Supplier::findOrFail($data['id']);
        $suppliers->favorite = $data['favorite'];
        $suppliers->save();

        return redirect('/edit');
    }

}