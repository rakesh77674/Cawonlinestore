<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class Admincontroller extends Controller
{
    public function user(){
        
        $data = User::paginate(6);

        return view("admin.adminusers",compact('data'));
    }
    public function userdelete(Request $request, $id){
        User::find($id)->delete();
        return redirect("admin.adminusers");

    }
    public function productview(){
        $products = Product::paginate(5);
       
        return view("admin.adminproductform",compact('products'));
    }
    public function AddProduct(Request $request){

        request()->validate([
            'image'=> 'mimes:jpeg,jpg,png,gif|required|max:10000', // max 10000kb,
            'producttype'=>'required',
            'title'=> 'required',
            'name'=>'required',
            'price'=>"required|regex:/^\d+(\.\d{1,2})?$/",
            'pages'=>'required',

        ]);
        $data = new Product;
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage', $imageName);
        $data->image = "/productimage/".$imageName;
        $data->producttype = $request->producttype;
        $data->title = $request->title;
        $data->user_id = auth()->user()->id;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->pages= $request->pages;
        $data->description = $request->description;
        $data->save();
        return redirect('/Products');

    }
    public function deleteproduct(Request $request, $id){
        Product::find($id)->delete();
        return Redirect("/Products");
    }
    public function Productupdateview( $id){
        $product = Product::find($id);
        return view("admin.updateview",['products' => $product]);
    }
    public function productupdate(Request $request,$id){
        request()->validate([
            'image'=> 'mimes:jpeg,jpg,png,gif|required|max:10000', // max 10000kb,
            'producttype'=>'required',
            'title'=> 'required',
            'name'=>'required',
            'price'=>"required|regex:/^\d+(\.\d{1,2})?$/",
            'pages'=>'required',

        ]);
        $data = Product::find($id);
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage', $imageName);
        $data->image = "/productimage/".$imageName;
        $data->producttype = $request->producttype;
        $data->title = $request->title;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->pages= $request->pages;
        $data->description = $request->description;
        $data->save();
        return redirect('/Products');
    }

}
