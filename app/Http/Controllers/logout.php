<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    public function adminlogout(){

        return view('lawyerpage/adminlogin');
    }

   

    public function userprofile(){

         return view('lawyerpage/userview');
     }

}
