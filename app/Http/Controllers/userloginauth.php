<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\usere;
use Session;
class userloginauth extends Controller
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
    $dat=DB::select('select * from useres where email=? and password=?',[$email,$password]);
    if(count($dat))
          {       
                $req->session()->put('data',$dat);
                return redirect('homepage');
          }
          else{
          
            return redirect('/userlogin')->withErrors(['Wrong  G Email OR Password']);
          }
           
         
   }
}

