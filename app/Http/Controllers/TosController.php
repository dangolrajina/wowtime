<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TosController extends Controller
{
    public function show()
	{
		return view ('/tos');
    }
}
