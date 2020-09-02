<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Controllers\sendMail;

class sendmail extends Controller
{
     public function show()
    {
        Mail::send(new sendMail());
       
    }
}
