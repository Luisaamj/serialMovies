<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Category::create([
            'name' => 'Action'
        ]);

        \App\Category::create([
            'name' => 'Bibliography'
        ]);

        \App\Category::create([
            'name' => 'Comedy'
        ]);
        \App\Category::create([
            'name' => 'Crime'
        ]);

        \App\Category::create([
            'name' => 'Documentary'
        ]);

        \App\Category::create([
            'name' => 'Science Fiction'
        ]);

        \App\Category::create([
            'name' => 'Drama'
        ]);

        \App\Category::create([
            'name' => 'Mistery'
        ]);

        \App\Category::create([
            'name' => 'Romance'
        ]);

        \App\Category::create([
            'name' => 'Thriller'
        ]);

        \App\Category::create([
            'name' => 'Horror'
        ]);




// $table->string('name');


    }
}
