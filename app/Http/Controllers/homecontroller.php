<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function index(){
        $games = Product::where("producttype", "game")->get();
        $cd = Product::where("producttype", "cd")->get();
        $book = Product::where("producttype", "books")->get();
        return view('home', ["games" => $games, "cd" =>$cd, "book" =>$book]);
    }
    public function Adminhome(){
        $usertype = Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome');
        }
        else{
            return redirect('/');
        }
    }
    
}
