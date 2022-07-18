<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index1()
    {
        return view('page.home');
    }
    public function index2()
    {
        return view('page.about');
    }
    public function index3()
    {
        return view('page.contact');
    }
    //
}
