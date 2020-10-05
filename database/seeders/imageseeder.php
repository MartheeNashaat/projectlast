<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\image;

class imageseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        image::create([
            'image'=>'tommyshirt1.jpg',
            'product_id'=>1
        ]);

        image::create([
            'image'=>'tommyshirt2.jpg',
            'product_id'=>1
        ]);

        image::create([
            'image'=>'tommyshirt3.jpg',
            'product_id'=>1
        ]);

        image::create([
            'image'=>'tommyjacket1.jpg',
            'product_id'=>2
        ]);

        image::create([
            'image'=>'tommyjacket2.jpg',
            'product_id'=>2
        ]);

        image::create([
            'image'=>'tommyjacket3.jpg',
            'product_id'=>2
        ]);

        image::create([
            'image'=>'armanitshirt1.jpg',
            'product_id'=>3
        ]);

        image::create([
            'image'=>'armanitshirt2.jpg',
            'product_id'=>3
        ]);

        image::create([
            'image'=>'armanitshirt3.jpg',
            'product_id'=>3
        ]);

        image::create([
            'image'=>'armanigirl3.jpg',
            'product_id'=>4
        ]);

        image::create([
            'image'=>'armanigirl2.jpg',
            'product_id'=>4
        ]);

        image::create([
            'image'=>'armanigirl1.jpg',
            'product_id'=>4
        ]);

    }
}
