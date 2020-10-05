<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\brand;

class brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        brand::create([
            'name'=>'Armani Exchange'
        ]);

        brand::create([
            'name'=>'Tommy Hilfiger'
        ]);

        brand::create([
            'name'=>'Calvin Klein'
        ]);
    }
}
