<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\customerdetail;
use App\order;

class customerde extends Controller
{
    public function show(Request $req)
    {
         
      $this->validate($req,['name'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

        'name.required'=> 'Name not be empty',
        'name.regex' => 'Name has Alphabets only',
        'name.min' => 'Name Must Be atleast 3 character',
        'name.mix' => 'Name Must Be less than 10 character',

    ]);   
    $this->validate($req,['lastname'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

      'lasttname.required'=> 'lastname not be empty',
      'lasttname.regex' => 'Last Name Alphabets only',
      'lasttname.min' => 'Last Name Must Be atleast 3 character',
      'lastname.mix' => 'Last Name Must Be less than 10 character',

  ]);   
  $this->validate($req,['email'=>'required|email'],[

    'email.required'=> ' email not be empty',
    'email' => 'must be valid email'
    

]);  
  
  
$this->validate($req,['telephone'=>'required|digits:11'],[

  'telephone.required'=> 'Telephone number cant be empty',
  'telephone.digits' => ' telephone Must Be digit 11 are you mad',
  

]);   
$this->validate($req,['companyname'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

    'companyname.required'=> ' not be empty companyname',
    'companyname.regex' => 'Alphabets only',
      'companyname.min' => 'Company Name Must Be atleast 3 character',
      'companyname.mix' => 'Company Name Must Be less than 10 character',
]); 

$this->validate($req,['companyid'=>'required|numeric|min:1'],[
  
    'companyid.required'=> 'companyid not be empty',
    'companyid.min' => ' companyid Must Be 5 digit',
]); 

$this->validate($req,['city'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[

    'city.required'=> 'lastname not be empty',
    'city.regex' => 'Alphabets only',
    'city.min' => 'City Name Must Be atleast 3 character',
    'city.mix' => 'City Name Must Be less than 10 character',
  
  ]);   
  $this->validate($req,['country'=>'required||regex:/^[a-zA-Z]+$/u|max:10|min:3'],[
  
    'country.required'=> 'lastname not be empty',
    'country.regex' => 'Alphabets only',
    'country.min' => 'Name Must Be atleast 3 character',
    'country.mix' => 'Name Must Be less than 10 character',
  
  ]); 
  $this->validate($req,['address'=>'required'],[
  
      'address.required'=> 'Please Write your address',
    
    
    ]);
    
    $this->validate($req,['address2'=>'required'],[
  
      'address2.required'=> 'Please Write your address2 ',
    
    
    ]);
       
    $this->validate($req,['postcode'=>'required|numeric|min:5'],[
  
      'postcode.required'=> 'postcode  cant be empty',
      'postcode.min' => ' postcode Must Be 5 digit',
      
    
    ]); 
    
  
  $this->validate($req,['comment'=>'required'],[
  
    'comment.required'=> 'Please Write your comment',
  
  
  ]);

  


    
                 $detail= new customerdetail;
                 $detail->name=$req->name;
                 $detail->lastname=$req->lastname;
                 $detail->email=$req->email;
                 $detail->telephone=$req->telephone;
                 $detail->company=$req->companyname;
                 $detail->companyid=$req->companyid;
                 $detail->address=$req->address;
                 $detail->address2=$req->address2;
                 $detail->city=$req->city;
                 $detail->country=$req->country;
                 $detail->postcode=$req->postcode;
                 $detail->comment=$req->comment;
                 
                 $detail->save();
                 $order= new order;
                 $data=DB::select('select * from orders');
                 if($data){
                    return redirect('/conformord');
                 }
                 else{
                    return redirect()->back()->withErrors(['Please Fisrt add product into cart. ']);
                 }
                 
    
                  
    
    }
}
