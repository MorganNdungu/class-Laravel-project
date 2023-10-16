<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController{
    use AuthorizesRequests, ValidatesRequests;

    public function store(Request $request) {
        // $user_credentials = $request->all();

        //validation
      
        $user_validation_input = $request->validate([
            'name' =>'required | min:5',
            'email'=>'required | email' ,
            'password'=>'required | min: 5'

        ],
        [
            'name.required' => 'Please enter a username.',
            'name.min' => 'Username must be at least 3 characters long.',
            'name.unique' => 'Username is already taken.',
            'email.required' => 'Please enter an email address.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email address is already registered.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Password must be at least 6 characters long.', 
        ]);
        // return dd($user_validation_input);


        //to get specific details

        // $user_credentials = $request->only(['username', 'email', 'password']);

        // return dd($user_credentials);

      // "save" accept object "create" accept an array

        User::create($user_validation_input);
        return redirect('/login')->with ('msg', "logged successful");
    }
    

 public function login(Request $request){
    $user_validation_input = $request->validate([
        'email' => 'required',
        'password' => 'required',

    ]);

    if(Auth::attempt($user_validation_input)){
        return redirect('/dashboard');

    }else{
            return redirect('/login')->with(['msg'=>'invalid credentials']);
        }
 }

 public function logout(){
    Auth::logout();
    return redirect('/login');

 }
}
