<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\admin;
class  adminupdate extends Controller
{
        public function show( $id)
        {
        
          $data=DB::select('select * from admins where id=? ',[$id]);
      
          return view('lawyerpage.adminsignupupdate')->withdata($data);
          
          


        }
}

