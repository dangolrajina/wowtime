<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 

     public function create()
    {
    	return view ('login');
    }

    public function store(Request $request)
    {
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('home');
        } else {
           
            return redirect()->intended(route('login'));;
        }
    }
    
    public function destroy()
    {
    	Auth('users')->logout();
        $request->session()->flush();
    	return redirect('login');
    }     
}
