<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Validation\ValidationException;

// use Illuminate\Http\Request;

class SessionController extends Controller
{
  public function login()
  {
    return view('auth.loginPage');
  }
    public function store()
    {
      // validate the request
      $attributes = request()->validate([
        //'email' => 'required|exists.users, email'
        'email' => 'required|email',
        'password' => 'required' 
      ]);
      //attempt to login the user based on the privided credentials 
      if(! auth()->attempt($attributes))
      {
        throw ValidationException::withMessages(
          ['email' => 'Your provided credentials could not be varified.'
        ]);   
      }

      // session fixation
      session()->regenerate();
    
      $usertType = auth()->user()->userType->name;

        if ($usertType === 'admin') {
          // return redirect('/admin-dashboard');
          return redirect('/add-property');
        } elseif ($usertType === 'client') {
          return redirect('/client-dashboard');
        }else {
          return redirect('/home');
        }

    
      //auth failed
     
      // return back()
      // ->withInput()
      // ->withErrors(['email' => 'Your provided credenatials could not be verified.']);
    }
    
    public function logout()
    {
      auth()->logout();
      return redirect('/')->with('success', 'GoodBye!');
    } 
}
