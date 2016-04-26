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
        foreach ($suppliers as $supplier) {
            $supplierUser = User::where('supplier_id', '=', $supplier['id'])->get();
            // $supplier['email'] = $supplierUser['email'];
            $supplier['email'] = $supplierUser[0]->email;
            // return $supplier;
        }


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

        $suppliers = Supplier::all();
        $suppliers->favorite = $data['favorite'];
        // $suppliers->save();

        return redirect('/edit');
    }

    public function search(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $user = Auth::user();

        $data = $request->all();
        $suppliers = Supplier::where('name', 'like', '%' . $data['search'] . '%')->get();

        foreach ($suppliers as $supplier) {
            $supplierUser = User::where('supplier_id', '=', $supplier['id'])->get();
            // $supplier['email'] = $supplierUser['email'];
            $supplier['email'] = $supplierUser[0]->email;
            // return $supplier;
        }
        
        // return view('edit', compact('suppliers', 'user'));
        if (count($suppliers) < 1) {
            return redirect('/edit')->with('error', 'Tyvärr hittates inga leverantörer med detta namnet. Nedan visas istället alla leverantörer.');
        }
        return redirect('/edit')->with('suppliers', $suppliers);
    }



}
