<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class HomeController extends Controller
{
 
    public function index()
	{
		$channels = Channel::latest()->get();
		return view ('welcome',compact('channels'));
    }

     
}
