<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcheckout extends Controller
{
    public function show()
    {
        return view('checkout');
    }
}
