<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\law;
class immigrationlawyerPageOnClientPage extends Controller
{
     public function show()
      {          $id='Immigration_Lawyer';     
            $imlawyer=DB::select('select * from laws where lawyerType=? ',[$id]);
            return view('clientpage/immigrationLawyerOn_ClientPage')->withimlawyer($imlawyer);
      }
}
      	
