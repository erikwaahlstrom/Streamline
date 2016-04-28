<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Mail;

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

	public function showNewPassword()
	{
		return view('auth.newpassword');
	}

	public function newPassword(Request $request)
	{
		$data = $request->all();

		$user = User::where('email', '=', $data['email'])->first();

		//skapar ett random lösenord till användaren
		$random_password = (str_random(8));
		$hashed_random_password = Hash::make($random_password);

		$user->password = $hashed_random_password;
		$user->save();

		//Skicka bokningsbekräftelse via email
        $mailContent = 'Du har fått ett nytt lösenord. Ditt nya lösenord är: ' . $random_password;

        Mail::raw($mailContent, function ($message) use($data) {
            $user = User::where('email', '=', $data['email'])->first();
            $emailTo = $user['email'];

            $message->from('helensbokningssystem@gmail.com');
            $message->to($emailTo);
            $message->subject('Nytt lösenord från Heléns rör bokningssytem');
        });

		return redirect('login')->with('status', 'Ett mail med ditt nya lösenord har skickats till dig.');
	}
}
