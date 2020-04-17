<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
public function create()
    {
    	return view('/registration');
    }
 
    public function store(RegisterRequest $request)
    {
       User::create([
            'name' =>  $request->input('name'),
            'email' =>  $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect('/');
    }
}
