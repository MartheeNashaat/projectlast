<?php

namespace Database\Factories;

use App\Models\image;
use App\Models\product;

use Illuminate\Database\Eloquent\Factories\Factory;

class imageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->image(public_path('images'),400,300, 'fashion', false),
            'product_id'=>product::factory()
        ];
    }
}
