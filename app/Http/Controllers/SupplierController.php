<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Request;
use App\Supplier;
use App\User;
use Illuminate\Support\Facades\Hash;
use Mail;


class SupplierController extends Controller
{
	public function store(Request $request)
    {

        $data = $request->all();
  
        $createsupplier = Supplier::create($data);
 
      //skapar ett random lösenord till användaren
      $random_password = (str_random(8));
		  $hashed_random_password = Hash::make($random_password);
		  $data["password"] = $hashed_random_password;
		
      //leverantör
		  $data["role"] = 2;
		
      $data["supplier_id"] = $createsupplier->id;
      unset($data["name"]);

         User::create($data);


        //Ger användaren feedback
        return redirect('create')->with('status', 'En ny leverantör har lagts till & ett mail med inloggningsupggifter har skickats.');


      //Skickar mail med inloggningsuppgifter
       $emailTo = $data['email'];

       $mailContent = 'Dina inloggningsuppgifter är följande:' . ' Email:' . $emailTo . ' ' . '& Lösenord:' . ' ' . $random_password;

       Mail::raw($mailContent, function ($message) use($emailTo) {
       $message->from('helensbokningssystem@gmail.com');
       $message->to($emailTo);
       $message->subject('Inloggningsuppgifter till Heléns Rör bokningssystem');



    });

} 

}