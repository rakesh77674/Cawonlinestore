<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productcontroller extends Controller
{
    public function indexproducts(){
        $products = Product::paginate(6);
        return view('Allproduct',["products" => $products ]);
    }
    public function search(Request $request){
        $search = $request->input('search');

        $products = Product::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('producttype', 'LIKE', "%{$search}%")
            ->get();
            $products = Product::paginate(6);
    
        // Return the search view with the resluts compacted
        return view('productSearch', compact('products'));
    }
           
       }


