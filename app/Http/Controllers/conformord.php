<?php

namespace App\Http\Controllers;
use App\customerdetail;
use App\order;
use App\conformorder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class conformord extends Controller
{
    public function show()
    {
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
                   $customername= $v;
                   
           
                 }
                 if($key=="lastname"){
                   $lastname= $v;
                   
                 }
                 if($key=="email"){
                   $email= $v;
                   
                 }
                 if($key=="telephone"){
                   $telephone= $v;
                   
                 }
                 if($key=="address"){
                   $address= $v;
           
                 }
                 if($key=="address2"){
                   $address2= $v;
           
                 }
                 if($key=="company"){
                   $companyname= $v;
           
                 }
                 if($key=="companyid"){
                   $companyid= $v;
           
                 }
                 if($key=="city"){
                   $city= $v;
           
                 }
                 if($key=="country"){
                   $country= $v;
           
                 }
                 if($key=="postcode"){
                   $postcode= $v;
           
                 }
                 
             }
         }
 
         foreach($ord as $vale)
         { 
 
 
          $productname=$vale->name;
          $price=$vale->price;
          $image=$vale->image;
          $qty=$vale->qty;
          $title=$vale->title;
        $conformorder->productname=$productname;
         $conformorder->price=$price;
         $conformorder->image=$image;
         $conformorder->qty=$qty;
         $conformorder->title=$title;
         $conformorder->customername=$customername;
         $conformorder->lastname=$lastname;
         $conformorder->email=$email;
         $conformorder->address=$address;
         $conformorder->address2=$address2;
         $conformorder->postcode=$postcode;
         $conformorder->city=$city;
         $conformorder->country=$country;
         $conformorder->companyname=$companyname;
         $conformorder->companyid=$companyid;
         $conformorder->save();       
 
         }
         
         DB::delete('delete from orders');
         DB::delete('delete from customerdetails');
         return redirect('/product')->withErrors(['Thanks For order.Your order will be at your address in 2 or 3 working days.']);
        
 



    }
}
