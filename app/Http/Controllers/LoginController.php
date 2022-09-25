<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = Users::where('email', $request->email)->first();

        if(!$email) {
            return redirect()->back()->with('emaliNotMatched', 'email not matched to our records');
        }
    
        if(!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back()->with('passwordNotMatched', 'Password not matched to our records');
        }
        else {
            return redirect()->route('category.index')->with('loggedIn', 'You are logged in!');
        }
    }
}
