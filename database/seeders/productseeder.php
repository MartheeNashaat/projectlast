<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Suppot\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Facker;
use App\Models\product;
use App\Models\image;


use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Sequence;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('products')->insert([
            'name'=>''
        ]); */

        product::create([
            'name'=>'RELAXED FIT ORGANIC COTTON SIGNATURE T-SHIRT' ,
            'price'=> 799,
            'sale_price'=> 250, 
            'stock'=>20 ,
            'category_id'=>1, 
            'color'=>'desert sky', 
            'brand_id'=>2,
            'size'=>'S' ,
            'description'=>'Tommy Hilfiger men T-shirt. Made from organic cotton, our nature-friendly tee is styled in a roomy relaxed fit, finished with our signature logo.',
        ]);
        product::create([
            'name'=>'ORGANIC COTTON CROPPED TRUCKER JACKET' ,
            'price'=>1199,
            'sale_price'=>500,
            'description'=>'Tommy Hilfiger women jacket. This trucker jacket has an all-over tie-dye pattern and a cropped fit, for a truly individualistic take on a denim classic. Part of our Tommy Jeans collection.
            Cropped Fit.
            100% organic cotton.' ,
            'stock'=>10,
            'category_id'=>1,
            'color'=>'desert sky', 
            'brand_id'=>2 ,
            'size'=>'M' ,
        ]);
        product::create([
            'name'=>'T-SHIRT WITH MACRO LOGO AND LETTERING IN CONTRAST COLORS' ,
            'price'=>1899,
            'sale_price'=>700,
            'description'=>'The renewal of the white t-shirt is a stylistic exercise that not everyone can afford. A | X does the job with the usual mastery, thanks to a large logo in the middle with inscription in contrasting colors.' ,
            'stock'=>7,
            'category_id'=>1,
            'color'=>'white', 
            'brand_id'=>1 ,
            'size'=>'L' ,
        ]);
        product::create([
            'name'=>'T-SHIRT BOYFRIEND FIT' ,
            'price'=>1199,
            'sale_price'=>500,
            'description'=>'T-shirt mania: When the fit makes the difference. The boyfriend fit of the A | X model emphasizes femininity "as standard", and that with a new and unusual effect.' ,
            'stock'=>7,
            'category_id'=>1,
            'color'=>'black', 
            'brand_id'=>1 ,
            'size'=>'XS',
        ]);

        $product = product::factory()
            ->count(7)
            ->state(new Sequence(
                ['size' => 'S'],
                ['size' => 'M'],
                ['size' => 'L'],
                ['size' => 'XL'],
                ['size' => 'XXL'],
            ))
            -> has(image::factory()->count(3))
            ->create();  
            
    }
}
