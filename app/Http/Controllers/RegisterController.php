<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        //return '<center><h1>Welcome to Management Home!</h1></center><br>';
        return view('login.create');
    }

    public function store()
    {
        // 'fullname',
    //'email',
    //'password',
    //'confirmpassword',
    //'mobilenumber'
        // var_dump(request()->all());
        // return request()->all();
        $attributes= request()->validate([
            'name' => 'required|max:255',
            'username' =>'required|min:3|max:255|unique:users,username',
            'email'=>'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
            //alternatively 'password'=> ['requird', 'min:7' , 'max:255',Rule::unique('users','username')];
        ]);
        //$attributes['password'] = bcrypt($attributes['password']); 

        //dd('success validation succeeded!');
       $user = User::create($attributes);
       auth()->login($user);
        
        return redirect('/')->with('success', 'Your Account Has Been Created.');
    }
}