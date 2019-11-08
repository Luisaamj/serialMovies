<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Movie::create([
            'title' => 'Joker',
            'description' => 'In Gotham City, mentally-troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: "The Joker".',
            'imdb' => 8.8,
            'image' => 'image1.png',
            'year'=>2019,
            'releaseDate'=>Carbon::parse('2019','10','3'),
            'type_id'=> 1,
            'category_id' => 4,
            'language_id' => 1,
            'country_id' => 4,
            'diretor_id' => 1,
            'star1_id' => 2,
            'star2_id' => 3,
            'star3_id' => 4,

        ]);

        \App\Movie::create([
            'title' => 'IT',
            'description' => 'In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.',
            'imdb' => 7.3,
            'image' => 'image1.png',
            'year'=>2017,
            'releaseDate'=>Carbon::parse('2017','09','14'),
            'type_id'=> 1,
            'category_id' => 11,
            'language_id' => 1,
            'country_id' => 4,
            'diretor_id' => 5,
            'star1_id' => 6,
            'star2_id' => 7,
            'star3_id' => 8,

        ]);



    }
}
