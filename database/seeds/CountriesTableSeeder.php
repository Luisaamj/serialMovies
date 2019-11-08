<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Country::create([
            'name' => 'Portugal',
            'flag' => 'pt'
        ]);
        \App\Country::create([
            'name' => 'Espanha',
            'flag' => 'es'
        ]);
        \App\Country::create([
            'name' => 'França',
            'flag' => 'fr'
        ]);
        \App\Country::create([
            'name' => 'Estados Unidos da América',
            'flag' => 'EUA'
        ]);
        \App\Country::create([
            'name' => 'Reino Unido',
            'flag' => 'uk'
        ]);
    }
}
