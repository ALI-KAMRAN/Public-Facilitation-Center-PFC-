<?php

namespace App\Http\Controllers;
use App\law;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class lawyerprofiledelete extends Controller
{
     public function delete($id){
           $lawyer=new law;
         $data=DB::table('laws')->where('id',$id);
           $data->delete();
           return  redirect('/index');

     }
          public function update($id){


            $lawyer=new law;
            $data=DB::select('select * from laws where id=? ',[$id]);
                return view('lawyerpage/lawyerUpDateForm')->withdata($data);

          }
}
