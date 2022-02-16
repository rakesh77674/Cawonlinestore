<?php

namespace Database\Factories;

use App\Models\product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker; 

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $array = ['game', 'books', 'cd'];
       
       $date = $this->faker->dateTimeBetween('-1 day' );
        return [
            
           'user_id' => User::factory(),
           'producttype' => $this->faker->randomelement($array) ,
           'title'=> $this->faker->sentence(),
           'name'=> $this->faker->name,
           'price'=> $this->faker->randomNumber(2),
           'image'=> $this->faker->imageUrl(640, 480),
           'pages'=> $this->faker->randomNumber(2),
            'description'=> $this->faker->text(),
		   'created_at'=>$date,
		   'updated_at'=>$date
        
           
        ];
      
    }
}
