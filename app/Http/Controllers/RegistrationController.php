<?php

namespace App\Http\Controllers;

use App\User;

use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
		{
			$pageType = "Register";
			return view('registrations.create', ['title' => $pageType]);
		}
		
	public function store()
		{
			// Validate the form
			
			$this->validate(request(), [
				
				'name' => 'required',
			
				'email' => 'required|email',
				
				'password' => 'required|confirmed'
				
				]);
			
			// Create and save the user
			
			$user = User::create(request(['name', 'email', 'password']));
			
			// Sign them in
			
			auth()->login($user);
			
			// send a welcome email
			
			\Mail::to($user)->send(new Welcome($user));
			
			// Redirect to the homepage
			
			return redirect()->home();
			
		}
}
