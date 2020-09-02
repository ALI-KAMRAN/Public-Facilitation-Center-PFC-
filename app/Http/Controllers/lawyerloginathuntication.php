<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\law;
use Session;
class lawyerloginathuntication extends Controller
{
   public function show(Request $req){

    $this->validate($req,['email'=>'required|email'],[

      'email.required'=> ' Email not be empty',
      'email' => 'Must be valid email'
      
  
  ]); 

  $this->validate($req,['password'=>'required'],[

    'email.required'=> 'Please enter Password',
    

]); 




    $lawyer=new law;
      $email=$req->email;
      $password=$req->password;
    $data=DB::select('select * from laws where email=? and password=?',[$email,$password]);
             
  
            if(count($data))
            {       
                  $req->session()->put('data',$data);
                  return view('lawyerpage/lawyerProfile');
            }
            else{
              return redirect('/index/lawyerlogin');
  
            }
         

   }
}
