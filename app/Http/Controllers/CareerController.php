<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
  public function show()
	{
		return view ('/career');
    }
}
