<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\newscontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[homecontroller::class, "index"])->name('/');
Route::get('/newsletter',[newscontroller::class, "newsletter"])->name('newsletter');
Route::post('/newsletter',[newscontroller::class, 'news'])->name('newsletter');

Route::middleware(['auth','can:isAdmin'])->group(function(){
    Route::get('/Adminhome',[homecontroller::class, "Adminhome"])->name('Adminhome');
    Route::get('/users',[Admincontroller::class, "user"])->name('users');
    Route::delete('/userdelete/{id}',[Admincontroller::class, "userdelete"])->name('userdelete');
    Route::get('/Products',[Admincontroller::class, "productview"])->name('Products');
    Route::post('/AddProducts',[Admincontroller::class, "AddProduct"])->name('AddProducts');
    Route::delete('/productdelete/{id}',[Admincontroller::class, "deleteproduct"])->name('productdelete');
    Route::get('/Productupdateview/{id}',[Admincontroller::class, "Productupdateview"])->name('Productupdateview');
    Route::put('/Productupdate/{id}',[Admincontroller::class, "Productupdate"])->name('Productupdate');
});
Route::get('/search',[productcontroller::class, "search"])->name('search');
Route::get('/indexproducts',[productcontroller::class, "indexproducts"])->name('indexproducts');
Route::get('/about',[postcontroller::class, "aboutview"])->name('about');
Route::get('/contactus',[postcontroller::class, "contactus"])->name('contactus');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



