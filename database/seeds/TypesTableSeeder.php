<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Type::create([
            'name' => 'Movie'
        ]);

        \App\Type::create([
            'name' => 'Serie'
        ]);
    }
}
