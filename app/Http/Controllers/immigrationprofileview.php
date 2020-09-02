<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\law;
class immigrationprofileview extends Controller
{
    public function show($id)
    {      $stu = DB::table('laws')->where ('id',$id)->first();
        return view('clientpage/lawyerProfile_view')->withdata($stu);
    }
}