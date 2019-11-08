<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Person::create([
            'name' => 'Todd Phillips',
            'original_name'=>'Todd Phillips',
            'birthday' => Carbon::parse('1970','12','20'),
            'job_id' => 1,
            'image' => 'image.png'
        ]);
        \App\Person::create([
            'name' => 'Joaquin Phoenix',
            'original_name'=>'Joaquin Rafael Bottom',
            'birthday' => Carbon::parse('1974','10','28'),
            'job_id' => 2,
            'image' => 'image.png'
        ]);
        \App\Person::create([
            'name' => 'Robert De Niro',
            'original_name'=>'Robert Anthony De Niro Jr.',
            'birthday' => Carbon::parse('1943','08','17'),
            'job_id' => 2,
            'image' => 'image.png'
        ]);
        \App\Person::create([
            'name' => 'Zazie Beetz',
            'original_name'=>'Zazie Olivia Beetz',
            'birthday' => Carbon::parse('1991','05','25'),
            'job_id' => 2,
            'image' => 'image.png'
        ]);
        \App\Person::create([
            'name' => 'Andy Muschietti',
            'original_name'=>'Andrés Muschietti',
            'birthday' => Carbon::parse('1973','08','26'),
            'job_id' => 1,
            'image' => 'image.png'
        ]);
        \App\Person::create([
            'name' => 'Bill Skarsgård',
            'original_name'=>'Bill Istvan Günther Skarsgård',
            'birthday' => Carbon::parse('1990','08','09'),
            'job_id' => 2,
            'image' => 'image.png'
        ]);
        \App\Person::create([
            'name' => 'Jaeden Martell',
            'original_name'=>'Jaeden Wesley Martell',
            'birthday' => Carbon::parse('2003','01','04'),
            'job_id' => 2,
            'image' => 'image.png'
        ]);
        \App\Person::create([
            'name' => 'Finn Wolfhard',
            'original_name'=>'Finn Wolfhard',
            'birthday' => Carbon::parse('2002','12','23'),
            'job_id' => 2,
            'image' => 'image.png'
        ]);

    }
}
