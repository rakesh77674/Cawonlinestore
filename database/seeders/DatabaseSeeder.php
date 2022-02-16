<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * 
     * 
     */
   
    public function run()
    {
       User::create([
         'name'=> 'admin',
         'username'=>'admin',
         'address'=> 'kohalpur',
         'email'=> 'admin@gmail.com',
         'usertype'=>'1',
         'password'=>bcrypt('admin'),
       ]);

        $this ->call([
         Productseeder::class,
        ]);
        
       
         
       
    }
}
