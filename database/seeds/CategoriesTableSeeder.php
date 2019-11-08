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
            'name' => 'Ação'
        ]);

        \App\Category::create([
            'name' => 'Bibliografia'
        ]);

        \App\Category::create([
            'name' => 'Comédia'
        ]);
        \App\Category::create([
            'name' => 'Crime'
        ]);

        \App\Category::create([
            'name' => 'Documentário'
        ]);

        \App\Category::create([
            'name' => 'Ficção Científica'
        ]);

        \App\Category::create([
            'name' => 'Drama'
        ]);

        \App\Category::create([
            'name' => 'Mistério'
        ]);

        \App\Category::create([
            'name' => 'Romance'
        ]);

        \App\Category::create([
            'name' => 'Suspense'
        ]);

        \App\Category::create([
            'name' => 'Terror'
        ]);

        \App\Category::create([
            'name' => 'Thriller'
        ]);



// $table->string('name');


    }
}
