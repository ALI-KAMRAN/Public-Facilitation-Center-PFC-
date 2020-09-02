<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Mail\SendMail;
use App\client;
use Session;
class MailSendabc extends Controller
{
    
    public function mailsendabc($id)

    {
        $abc=DB::select('select email from clients where id=?',[$id]);
        
        $value = Session::get('data');

       
        
        foreach(session('data') as $val)
        {
            foreach($val as $key => $v)
            {
                                  if($key=="contact"){
                  $contact=$v;
                }
            }
        }

        foreach(session('data') as $val)
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