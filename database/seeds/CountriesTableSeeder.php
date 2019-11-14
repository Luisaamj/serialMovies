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
            'name' => 'Spain',
            'flag' => 'es'
        ]);
        \App\Country::create([
            'name' => 'France',
            'flag' => 'fr'
        ]);
        \App\Country::create([
            'name' => 'United States of America',
            'flag' => 'EUA'
        ]);
        \App\Country::create([
            'name' => 'United Kingdom',
            'flag' => 'uk'
        ]);
    }
}
