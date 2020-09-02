<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Mail\SendMail;
use App\law;
use Session;
class MailSend extends Controller
{
    public function mailsend($id)

    {
        $abc=DB::select('select email from laws where id=?',[$id]);
       
        $value = Session::get('dat');

       
        
        foreach(session('dat') as $val)
        {
            foreach($val as $key => $v)
            {
                                  if($key=="contact"){
                  $contact=$v;
                }
            }
        }

        foreach(session('dat') as $val)
        {
            foreach($val as $key => $v)
            {
                                  if($key=="name"){
                  $name=$v;
                }
            }
        }
        
        $details = [
           'title' => $contact,
            'body' => $name
     ];
            
        \Mail::to($abc[0]->email)->send(new SendMail($details));
        return redirect()->back()->with('success', 'Your Mail is Send!');   
    }


   

}