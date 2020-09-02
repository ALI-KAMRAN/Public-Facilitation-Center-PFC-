<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\law;
class criminallawyerPageOnClientPage extends Controller
{
     public function show()
      {          $id='Criminal_Lawyer';     
            $flawyer=DB::select('select * from laws where lawyerType=? ',[$id]);
            return view('clientpage/criminalLawyerOn_ClientPage')->withclawyer($flawyer);
      }
}
      

