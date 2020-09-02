<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\law;
use \App\Mail\SendMail;


class emailauthentication2 extends Controller
{
    public function show(Request $req)
    {
      $email=$req->email;
    
      $user = DB::table('clients')->where('email', '=', $email)
    ->first();
        
    if(!empty($user)){
      $a=$user->email;
       $details = [
        'title' => 'your code ',
        'body' => $user->password
    ];
   
        
    \Mail::to($a)->send(new SendMail($details));
    return view('client_login')->withErrors('Check Your Mail Box and Enter Email and Your Password');   
  }
  else
  {
    return redirect()->back()->withErrors('Wronge Email');

  }
       

       
     

    }
}
