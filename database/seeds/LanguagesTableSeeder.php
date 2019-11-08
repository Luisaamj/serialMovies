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
            'name' => 'Inglês'
        ]);
        \App\Language::create([
            'name' => 'Português'
        ]);
        \App\Language::create([
            'name' => 'Francês'
        ]);

    }
}
