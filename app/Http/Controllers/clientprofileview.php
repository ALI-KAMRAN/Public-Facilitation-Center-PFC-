<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\clients;
class clientprofileview extends Controller
{
    public function show($id)
    {      $stu = DB::table('clients')->where ('id',$id)->first();
        return view('lawyerpage/clientProfile_view')->withdata($stu);
    }
}
