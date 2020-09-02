<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected  $redirectTo =RouteServiceProvider::HOME;
    // RouteServiceProvider::

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
             'avatar' => ['required','image', 'mimes:jpg,jpeg,svg,png,bmp','max:5000'],
             'phone_number' => ['required', 'string','unique:users','min:11', 'max:11'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'role' => ['string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:14' , 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create( array $data){
        $user= new User();
    //  $user->email= $data->input('name');
       
       if(request()->hasfile('avatar')){
           $file= request()->file('avatar');
           $extension= $file->getClientOriginalExtension();
           $filename= time() . '.' . $extension;
           $file->move('images/', $filename);
           $user->avatar=$filename;
           return User::create([
                'name' => $data['name'],
                 'avatar' => $filename,
                 'phone_number' => $data['phone_number'],
                 'email' => $data['email'],
                //  'role' => $data['role'],
                
                'password' => Hash::make($data['password']),
            ]);
        
       
    }
       
        
        
       
       
    
    }
   
}