<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function aboutview(){
        return view('about');
    }
    public function contactus(){
        return view('contact');
    }
}
