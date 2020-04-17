<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('/admin/registration');
    }
 
    public function store(RegisterRequest $request)
    {
        Admin::create([
            'name' =>  $request->input('name'),
            'email' =>  $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect('/');
    }
}
