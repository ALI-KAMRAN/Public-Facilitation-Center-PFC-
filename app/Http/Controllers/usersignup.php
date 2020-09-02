<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\usere;
use Session;

class usersignup extends Controller
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
  $this->validate($req,['e_mail'=>'required|email|unique:App\usere,email'],[

    'e_mail.required'=> ' email not be empty',
    'e_mail' => 'must be valid email'
    

]);  
$this->validate($req,['min:6|required_with:password_confirmation|same:password_confirmation'],[

  'password.required'=> ' password cant be empty',
  'password.min' => 'password must be atleast 6 character'
  

]);   
  
$this->validate($req,['contact'=>'required|numeric'],[

  'contact.required'=> 'Contact number cant be empty',
  'contact.numeric' => 'Must Be digit 11 are you mad',
  

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
      

$this->validate($req,['birth'=>'required|date_format:Y-m-d'],[

  'birth.required'=> 'Date of Birth not be empty',
  'birth.date_format' => 'Format must be Year-Month-Date',
  
  
]);   

 
$this->validate($req,['image'=>'required'],[

  'image.required'=> 'Please upload Your Picture',


]); 
   
$this->validate($req, ['file' => 'image|mimes:jpeg,png,jpg,gif,svg',]);

  

             $lawyer= new usere;
             $lawyer->name=$req->firstname;
             $lawyer->lname=$req->lastname;
             $lawyer->email=$req->e_mail;
             $lawyer->password=$req->password;
             $lawyer->conpassword=$req->password_conformation;
             $lawyer->contact=$req->contact;
             $lawyer->gender=$req->gender;
             $lawyer->city=$req->city;
             $lawyer->country=$req->country;
             $lawyer->birth=$req->birth;
            
             if($req->hasfile('image')){
              $im = $req->file('image');
              $nam = time().'.'.$im->getClientOriginalExtension();
              $destinationPath = public_path('/storage/upload/');
              $im->move($destinationPath, $nam);
              $image=$nam;
              $lawyer->image=$image;
              }
             $lawyer->save();

   return view("lawyerpage.userlogin")->withErrors(['Yor form is submited successfuly Please login Now']);



   
  }

  public function abc()
  {
    return view('lawyerpage.usersignup');
  }

}

