<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexabout extends Controller
{
    public function show()
      {
      	  return view('index_about');
      }
}
