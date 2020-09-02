<?php

namespace App\Http\Controllers;
use App\client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class clientprofiledelete extends Controller
{
     public function delete($id){
           $lawyer=new client;
         $data=DB::table('clients')->where('id',$id);
           $data->delete();
               return  redirect('/index');

     }
          public function update($id){
                   

            $lawyer=new client;
            $data=DB::select('select * from clients where id=? ',[$id]);
                return view('clientpage/clientUpDateForm')->withdat($data);

          }
}