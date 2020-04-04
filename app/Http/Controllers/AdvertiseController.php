<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function show()
	{
		return view ('/advertise-with-us');
    }
}
