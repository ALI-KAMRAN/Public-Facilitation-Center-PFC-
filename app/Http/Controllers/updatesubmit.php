<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Appp\admin;
class updatesubmit extends Controller
{
        public function show(Request $req,$id)
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
      'contact.digits' => 'phone number must  Be digit 12 ',
      
    
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
          
    
    $this->validate($req,['birth'=>'required'],[
    
      'birth.required'=> 'Date of Birth not be empty',
      'birth.date_format' => 'Format must be Year-Month-Date',
      
      
    ]);   
    
    ;  
    $this->validate($req,['image'=>'required'],[
    
      'image.required'=> 'Please upload Your Picture',
    
    
    ]); 
   


          $this->validate($req, ['file' => 'image|mimes:jpeg,png,jpg,gif,svg',]);

          $name=$req->firstname;
          $lname=$req->lastname;
          $email=$req->e_mail;
          $password=$req->password;
          $conpassword=$req->password_conformation;
          $contact=$req->contact;
          $city=$req->city;
          $country=$req->country;
          $birth=$req->birth;
          $gender=$req->gender;
        
          if($req->hasfile('image')){
            $im = $req->file('image');
            $nam = time().'.'.$im->getClientOriginalExtension();
            $destinationPath = public_path('/storage/upload/');
            $im->move($destinationPath, $nam);
            $image=$nam;
          
            }
    
          

     DB::update('update admins set name=?, lname=?, email=?, password=?, conpassword=?, contact=?, gender=?, city=?, country=?, birth=? ,image=? where id=?'
     ,[$name,$lname,$email,$password,$conpassword,$contact, $gender, $city,$country,$birth,$image,$id]);


     $data=DB::select('select * from admins where email=? and password=?',[$email,$password]);
     if(count($data))
     {       
           $req->session()->put('data',$data);
           return view('lawyerpage.adminview');
     }
     else{
       return redirect('lawyerpage.adminlogin');

     }
        
                
                  




        }
}