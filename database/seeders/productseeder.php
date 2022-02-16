<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
      
        Product::factory(300)->create();
    }
    

}
