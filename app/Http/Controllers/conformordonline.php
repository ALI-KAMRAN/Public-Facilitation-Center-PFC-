<?php
namespace App\Http\Controllers;
use App\customerdetail;
use App\order;
use App\conformorder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Session;

class conformordonline extends Controller
{
    public function show(Request $req)
    {   


      $total=Session::get('total');
      \Stripe\Stripe::setApiKey ( 'sk_test_51H15KHClZ1D7GYe0MtviiPHEaucbA19Nwrh5uKjTmSYTP7c6ms4bbYIFjtZVSRCDozmFBglZvzvTtW3r4izHTPjt00uc6W1gJa' );

        \Stripe\Charge::create ( array (
            "amount" => $total,
            "currency" => "usd",
            "source" => $req->input ( 'stripeToken' ), // obtained with Stripe.js
            "description" => "Test payment." 
        ) );
       
      
     
   
         $order= new order;
         $conformorder= new conformorder;
         $customerdetail= new customerdetail;
         $ord=DB::select('select * from orders');
         $detail=DB::select('select * from customerdetails');
  
         foreach($detail as $val)
         {
             foreach($val as $key => $v)
             {
               if($key=="name"){
                   $name= $v;
                   
           
                 }
                 if($key=="f_name"){
                   $f_name= $v;
                   
                 }
                 if($key=="email"){
                   $email= $v;
                   
                 }
                 if($key=="cell_no"){
                   $cell_no= $v;
                   
                 }
                 if($key=="address"){
                   $address= $v;
           
                 }
                 if($key=="cast"){
                   $cast= $v;
           
                 }
                 if($key=="purpose"){
                   $purpose= $v;
           
                 }
                 if($key=="purchase"){
                   $purchase= $v;
           
                 }
                 if($key=="comments"){
                   $comments= $v;
           
                 }
                 if($key=="cnic"){
                   $cnic= $v;
           
                 }
                 if($key=="price"){
                   $price= $v;
           
                 }
                 
             }
         }
 
         foreach($ord as $vale)
         { 
 
 
          $productname=$vale->name;
          $price=$vale->price;
          
        
 
           
         }
 
         $conformorder->name=$name;
         $conformorder->price=$price;
         $conformorder->comments=$comments;
         $conformorder->email=$email;
         $conformorder->address=$address;
         $conformorder->cell_no=$cell_no;
         $conformorder->f_name=$f_name;
         $conformorder->cnic=$cnic;
        
         $conformorder->purpose=$purpose;
         $conformorder->purchase=$purchase;
         $conformorder->save();
         
         DB::delete('delete from orders');
         DB::delete('delete from customerdetails');
         return redirect('/product')->withErrors(['Thanks For order.Your order will be at your address in 2 or 3 working days.']);
        
 



    }
}
