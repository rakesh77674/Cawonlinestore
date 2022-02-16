<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'producttype',
         'title',
         'name',
         'price',
         'image',
         'pages',
         'description',
 ];
 
 public function user(){
     return $this->belongsTo(User::class);
 }

 

}
