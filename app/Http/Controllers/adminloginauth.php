<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\admin;
use Session;
class adminloginauth extends Controller
{
   public function show(Request $req){
    

      $this->validate($req,['email'=>'required|email'],[
  
        'email.required'=> ' Email not be empty',
        'email' => 'Must be valid email'
        
    
    ]); 
  
    $this->validate($req,['password'=>'required'],[
  
      'email.required'=> 'Please enter Password',
      
  
  ]); 
 
  
  $email=$req->email;
  $password=$req->password;
  $dat=DB::select('select * from admins where email=? and password=?',[$email,$password]);
  if(count($dat))
        {       
              $req->session()->put('data',$dat);
              return view('lawyerpage.adminview');
        }
        else{
        
          return redirect('/adminlogin')->withErrors(['Wrong  G Email OR Password']);
        }
         
   }

   
  
}

