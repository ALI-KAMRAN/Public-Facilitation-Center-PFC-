<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetpassword extends Controller
{
    public function show()
    {
        return view('forgetpassword.forgetpassword');
    }
}
