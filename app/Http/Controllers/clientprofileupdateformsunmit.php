<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\client;
use Session;


class clientprofileupdateformsunmit extends Controller
{
    public function show(Request $req)
    {

      $this->validate($req,['firstname'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

        'firstname.required'=> 'Name not be empty',
        'firstname.regex' => 'Alphabets only',
        'firstname.min' => 'Name Must Be atleast 3 character',
        'firstname.mix' => 'Name Must Be less than 10 character',

    ]);   
    $this->validate($req,['lastname'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

      'lasttname.required'=> 'lastname not be empty',
      'lasttname.regex' => 'Alphabets only',
      'lasttname.min' => 'Name Must Be atleast 3 character',
      'lastname.mix' => 'Name Must Be less than 10 character',

  ]);   
  $this->validate($req,['e_mail'=>'required|email'],[

    'e_mail.required'=> ' email not be empty',
    'e_mail' => 'must be valid email'
    

]);  
$this->validate($req,['min:6|required_with:password_confirmation|same:password_confirmation'],[

  'password.required'=> ' password cant be empty',
  'password.min' => 'password must be atleast 6 character'
  

]);   
  
$this->validate($req,['contact'=>'required|digits:12'],[

  'contact.required'=> 'Contact number cant be empty',
  'contact.digits' => ' phone number Must Be digit 11 ',
  

]);   
$this->validate($req,['education'=>'required'],[

  'education.required'=> ' not be empty',
  
  

]);   
$this->validate($req,['city'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

  'city.required'=> 'lastname not be empty',
  'city.regex' => 'Alphabets only',
  'city.min' => 'Name Must Be atleast 3 character',
  'city.mix' => 'Name Must Be less than 10 character',

]);   
$this->validate($req,['country'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

  'country.required'=> 'lastname not be empty',
  'country.regex' => 'Alphabets only',
  'country.min' => 'Name Must Be atleast 3 character',
  'country.mix' => 'Name Must Be less than 10 character',

]);   
        

$this->validate($req,['age'=>'required'],[

  'age.required'=> 'Not Be empty',


]);  

$this->validate($req,['comment'=>'required'],[

  'comment.required'=> 'Please Write your experience Or Write about Yourself',


]);   


  

             $lawyer= new client;
             $lawyer->name=$req->firstname;
             $lname=$lawyer->lname=$req->lastname;
             $email=$lawyer->email=$req->e_mail;
             $password=$lawyer->password=$req->password;
             $conpassword=$lawyer->conpassword=$req->password_conformation;
             $contact=$lawyer->contact=$req->contact;
             $education=$lawyer->education=$req->education;
             $city=$lawyer->city=$req->city;
             $country=$lawyer->country=$req->country;
             $birth=$lawyer->birth=$req->birth;
             $gender=$lawyer->gender=$req->gender;
             $age=$lawyer->age=$req->age;
             if($req->hasfile('image')){
              $im = $req->file('image');
              $nam = time().'.'.$im->getClientOriginalExtension();
              $destinationPath = public_path('/storage/upload/');
              $im->move($destinationPath, $nam);
              $image=$nam;
              
              }
              $image=$lawyer->image=$image;
                  $lawyer->save();
             $comment=$lawyer->comment=$req->comment;

             DB::update('update clients set name=?, lname=?, email=?, password=?, conpassword=?, contact=?, education=?, city=?, country=?, birth=?, gender=? ,age=? ,image=? ,experience=? where id=?'
     ,[$name,$lname,$email,$password,$conpassword,$contact, $education, $city,$country,$birth,$gender,$age,$image,$experience,$id]);
        
        
             $dat=DB::select('select * from clients where email=? and password=?',[$email,$password]);
             if(count($dat))
             {       
                   $req->session()->put('dat',$data);
                   return view('clientpage/clientProfile');
             }
             else{
               return redirect('/index/clientlogin');
        
             }
                

      }

}