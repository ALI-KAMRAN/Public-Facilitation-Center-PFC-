<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userlogin extends Controller
{
    public function show()
    {
    return view('lawyerpage.userlogin');
    }

    public function showuser()
    {
    return view('lawyerpage.userview');
    }

}
