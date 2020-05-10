<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;

class AdminController extends Controller
{
    public function __construct() //magic method
    {
        $this->middleware('auth:admin');
    } 

     public function create()
    {
        return view ('adminlogin');
    }

     public function store(Request $request)
    {

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('admin.index');
         } else {
           
            return redirect()->back();
        }
    }

 

    public function destroy()
    {
        Auth('admins')->logout();
        $request->session()->flush();
        return redirect('login');
    }     
}
