<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\category;
use App\Models\brand;





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
        return [
            'name' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),  
            'description' => $this->faker->paragraph,
            'color' => $this->faker->safeColorName,
            'stock' =>  $this->faker->numberBetween($min = 1, $max = 20),
            'price'  => $this->faker-> randomFloat($nbMaxDecimals = 3, $min = 1000, $max = 2000) ,
            'sale_price' => $this->faker->randomFloat($nbMaxDecimals = 3, $min = 500, $max = 700)  ,
            'size'=> $this->faker->word,
            'category_id'=>$this->faker->numberBetween($min = 1, $max = 4),
            'brand_id'=>$this->faker->numberBetween($min = 1, $max = 3)
        ];
    }
}
