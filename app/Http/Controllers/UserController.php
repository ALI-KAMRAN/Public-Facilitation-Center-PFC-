<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

 

class UserController extends Controller
{
    public function editimage(){
        if(Auth::user()){
            $user=User::find(Auth::user()->id);
            if($user){
            return view('admin.updateimage')->withUser($user);}
            else{return redirect()->back();}
        }
        else{return redirect()->back();}
    }
    public function updateimage(request $data){
        $user=User::find(Auth::user()->id);
        if($user){
            // if(Auth::user()->email === $data['email']){
                $validate=$data->validate([
//             //         'name' => 'required|string|max:255',
                 'avatar' => 'required|image|mimes:jpg,jpeg,svg,png,bmp|max:5000',
//             //      'phone_number' => 'required|string|unique:users|min:11|max:11',
//             //      'email' => 'required|string|email|max:255|unique:users',
                
                ]);
               
            }
//             // else{
//             $validate=$data->validate([
//                 // 'name' => 'string|max:255',
//              'avatar' => 'image|mimes:jpg,jpeg,svg,png,bmp|max:5000',
//             //  'phone_number' => 'required|string|min:11|max:11',
//             //  'email' => 'required|string|email|max:255',
            
//             ]);
//             // }
            // $user->name=$data['name'];
            if($data->hasfile('avatar')){
                $file= $data->file('avatar');
                $extension= $file->getClientOriginalExtension();
                $filename= time() . '.' . $extension;
                $file->move('images', $filename);
                $user->avatar=$filename;
                
               
               
     
//             }
//             // $user->phone_number=$data['phone_number'];
//             // $user->email=$data['email'];
           
           
            
            $user->save();
            $data->session()->flash('success','your Image has been updated');
            
            return redirect('/profile');

        }
        else{
            return redirect()->back();
                                        }


    }
    public function editname(){
        if(Auth::user()){
            $user=User::find(Auth::user()->id);
            if($user){
            return view('admin.updatename')->withUser($user);}
            else{return redirect()->back();}
        }
        else{return redirect()->back();}
    }
    public function update_name(request $data){
        $user=User::find(Auth::user()->id);
        if($user){
            
            $validate=$data->validate([
                'name' => 'string|max:255',
            ]);
            // }
            $user->name=$data['name'];
            
//             // $user->phone_number=$data['phone_number'];
//             // $user->email=$data['email'];
           
           
            
            $user->save();
            // $data->session()->flash('success','your name has been updated');
            
            return redirect('/profile');
        }
        else{
            return redirect()->back();
                                        }


//         // $users = User::all();
//         // if($data->hasfile('image')){
//         //     $image= $data->file('image');
            
//         //     $filename= time() . '.' . $image->getClientOriginalExtension();
           
//         //     Image::make($image)->resize(300, 300)->save(public_path('upload/images/', $filename));
//         //     $user = Auth::user();
//         //     $user->image = $filename;
//         //     $user->save();
            
        }
//     // return view('profile' , compact('users'),array('user' => Auth::user()));
// }
public function edit_password(){
    if(Auth::user()){
        $user=User::find(Auth::user()->id);
        if($user){
        return view('admin.updatepassword');}
        
    }
    else{return redirect()->back();}

}
public function update_password(request $data){
    $user=User::find(Auth::user()->id);
    if($user){
        $validate=$data->validate([
            'oldpassword' => ['min:8|max:14'],
        'password' => ['min:8|max:14|confirmed'],
        ]);
        if(Hash::check($data['oldpassword'],$user->password)&& $validate){
            $user->password=Hash::make($data['password']);
            $user->save();
            $data->session()->flash('success','your password has been updated');
            return view('admin.profile');
        }
        else{
            $data->session()->flash('error','the password does not match with your current password');
            return redirect()->route('admin.updatepassword');
        }
    }
}


}