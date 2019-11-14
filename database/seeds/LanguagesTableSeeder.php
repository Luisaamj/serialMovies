<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Language::create([
            'name' => 'English'
        ]);
        \App\Language::create([
            'name' => 'Portuguese'
        ]);
        \App\Language::create([
            'name' => 'French'
        ]);

    }
}
