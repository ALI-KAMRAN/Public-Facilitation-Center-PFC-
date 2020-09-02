<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\client;
use Session;
class clientloginathuntication extends Controller
{
   public function show(Request $req){
    

      $this->validate($req,['email'=>'required|email'],[
  
        'email.required'=> ' Email not be empty',
        'email' => 'Must be valid email'
        
    
    ]); 
  
    $this->validate($req,['password'=>'required'],[
  
      'email.required'=> 'Please enter Password',
      
  
  ]); 

    $lawyer=new client;
      $email=$req->email;
      $password=$req->password;
    $dat=DB::select('select * from clients where email=? and password=?',[$email,$password]);
             
  
            if(count($dat))
            {       
                  $req->session()->put('dat',$dat);
                  return view('clientpage.client_Profile');
            }
            else{
              return redirect('/index/clientlogin');
  
            }
         

   }
}
