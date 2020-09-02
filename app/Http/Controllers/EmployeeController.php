<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller
{
    public function dashboard(){
        // $employees = Employee::fimd('id');
        // echo $employees->image;
        return view('admin.dashboard'); 
        // ->with('employees',$employees);
      
    }
    public function certificate(){
       
        return view('admin.certificate');
    }
    public function lossreport(){
       
        return view('admin.lossreport');
    }
    // public function lossreport(){
       
    //     return view('admin.lossreport');
    // }
    public function lawyers(){
        return view('admin.lawyers');
    }
    public function stamppaper(){
        return view('admin.stamppaper');
    }
    public function verifydocuments(){
        return view('admin.verifydocuments');
    }
    public function deathcertificate(){
        return view('admin.deathcertificate');
    } 
     public function divorcecertificate(){
        return view('admin.divorcecertificate');
    }
    public function charactercertificate(){
        return view('admin.charactercertificate');
    }
    public function drivinglicense(){
            return view('admin.drivinglicense');}
        public function merriage(){
            return view('admin.merriage');
    }
    public function reports(){
        return view('admin.reports');}
        public function profile(){
            return view('admin.profile');
        
    }
    public function team(){
        return view('admin.team');
    
}
    public function index(){
        return view('admin.image');
    }
    public function insertImage(request $data){
    $employee= new Employee();
    // $employee->email= $data->input('email');
    
       if($data->hasfile('image')){
           $file= $data->file('image');
           $extension= $file->getClientOriginalExtension();
           $filename= time() . '.' . $extension;
           $file->move('uploads/employee/', $filename);
           $employee->image=$filename;

       }else{
           return $data;
           $employee->image='';
       }
       // $user->email = $data->input('email');
       // $user->password = $data->Hash::make($data['password']);
       $employee->save();
        return view('admin.dashboard');
        // ->with('auth.image',$employee);
    
}
public function displayImage(){
    $employees = Employee::all();
    return view('admin.fetchimage',compact('employees'));
    
}
public function updateimage(){
    return view('admin.updateimage');
}

public function edit($id){
    $employees =Employee::find($id);
    return view('admin.employeeupdateform')->with('employees',$employees);
}
public function update(request $data,$id){
    $employees = Employee::find($id);
     // $employee->email= $data->input('email');
       
     if($data->hasfile('image')){
        $file= $data->file('image');
        $extension= $file->getClientOriginalExtension();
        $filename= time() . '.' . $extension;
        $file->move('uploads/employee/', $filename);
        $employees->image=$filename;}
        $employees->save();
        return view('admin.image');
        // ->with('employees',$employees);

}
}