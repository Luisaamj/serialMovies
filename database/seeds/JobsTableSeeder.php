<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Job::create([
            'name' => 'Diretor'
        ]);

        \App\Job::create([
            'name' => 'Ator'
        ]);
    }
}
