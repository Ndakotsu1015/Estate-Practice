<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function login()
   {
       return view('auth.login');
   }
    //
    public function register() 
    {
        return view('auth.registerUser');
    }
       public function registration(Request $request)
    {
         $attributes= $request->validate([
            'name' => 'required|max:255',
            'username' =>'required|min:3|max:255|unique:users,username',
            'email'=>'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
            'user_type_id' => 'integer',
        ]);
        
        $attributes['password'] = bcrypt($request->password);
       $user = User::create($attributes);
       auth()->login($user);
        
        return redirect('/add-property')->with('success', 'Your Account Has Been Created.');
    }
    }

