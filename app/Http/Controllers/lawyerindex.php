<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\law;
use Session;
class lawyerindex extends Controller
{
      public function show(Request  $req){

            return view('lawyerpage/lawyerindex_AfterLogin');

    }
}
