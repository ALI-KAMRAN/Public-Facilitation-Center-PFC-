<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\usere;

class userupdate extends Controller
{
    public function show($id)
    {
        $data=DB::select('select * from useres where id=? ',[$id]);
      
          return view('lawyerpage.userupdatesubmit')->withdata($data);

    
    }


    public function showdelete($id)
    {
        $data=DB::table('useres')->where('id',$id);
          $data->delete();
          return view('lawyerpage.userlogin')->withdata($data);
          
    
    }
}
