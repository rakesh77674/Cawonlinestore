<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
           
            $table->id();
            $table->string("producttype")->nullable();
            $table->string("title")->nullable();
            $table->string("name")->nullable();
            $table->decimal("price")->nullable();
            $table->string("image")->nullable();
            $table->string("pages")->nullable();
            $table->string("description")->nullable(); 
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');  
            
                   
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
       
        
    }
}
