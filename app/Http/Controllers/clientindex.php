<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientindex extends Controller
{
    public function show()
      {
      	  return view('clientpage/clientindex_afterlogin');
      }
}
