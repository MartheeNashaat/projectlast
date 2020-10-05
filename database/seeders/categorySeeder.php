<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'type'=>'clothing'
        ]);

        category::create([
            'type'=>'shoes'
        ]);

        category::create([
            'type'=>'bags'
        ]);

        category::create([
            'type'=>'accessories'
        ]);
        //
    }
}
