<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view extends Controller
{
    public function show(){
        return view('lawyerpage.adminview');
    }
}
