<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\law;

use App\Message;
class familylawyerPageOnClientPage extends Controller
{
     public function show()
      {          $id='Family_Lawyer';     
            $flawyer=DB::select('select * from laws where lawyerType=? ',[$id]);
               return view('clientpage/familyLawyerOn_ClientPage')->withflawyer($flawyer);
      }

      
      
}
      	 
    
