<?php

namespace App\Http\Controllers;
use App\customerdetail;
use App\order;
use App\conformorder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Session;

class payment extends Controller
{
    public function show(Request $req)
    {
      
$this->validate($req,['name'=>'required'],[

        'name.required'=> 'Name not be empty'
        

    ]);   
    $this->validate($req,['f_name'=>'required'],[

      'f_name.required'=> 'Father name not be empty'
      

  ]);   
  $this->validate($req,['email'=>'required'],[

    'email.required'=> ' email not be empty'
    
    

]);  

$this->validate($req,['cell_no'=>'required'],[

  'cell_no'=> 'Cell cant be empty',
  
  

]);   
$this->validate($req,['address'=>'required'],[

  'address.required'=> ' address not be empty',
  
  

]);   
$this->validate($req,['cnic'=>'required|digits:13'],[

  'cnic.required'=> 'cnic not be empty'
  

]);   
$this->validate($req,['purpose'=>'required'],[

  'purpose.required'=> 'purpose not be empty'
  

]);   
      

$this->validate($req,['purchase'=>'required'],[

  'purchase.required'=> 'purchase not be empty',
  
  
  
]);   

$this->validate($req,['price'=>'required'],[

  'price.required'=> 'price Not Be empty',


]);  
$this->validate($req,['comments'=>'required'],[

  'comments.required'=> 'Please enter comment',


]); 



      
        $detail= new customerdetail;
        $detail->name=$req->name;
        $detail->f_name=$req->f_name;
        $detail->email=$req->email;
        $detail->cell_no=$req->cell_no;
        $detail->cnic=$req->cnic;
        $detail->payment_method=$req->payment_method;
        $detail->address=$req->address;
        $detail->purpose=$req->purpose;
        $detail->purchase=$req->purchase;
        $detail->price=$req->price;
       $detail->comments=$req->comments;


      
       $data=DB::select('select * from orders');
        
       if($data)
       {
        $detail->save();

        $abc=Session::get('total'); 
     return view('payment')->with('total', $abc);

       }
       else
       {

        return redirect()->back()->withErrors(['Please First add product to cart']);


       }
       
                  
    
    }
}
