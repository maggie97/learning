<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('child')->insert([
            'name' => 'Mateo',
            'lastName' => 'Arias',
            'dateBorn' => '30/07/2014',
            'users_tutor_id' => '2',
            'users_professor_id' => '1'
        ]);
        DB::table('child')->insert([
            'name' => 'Aaron',
            'lastName' => 'Mendez',
            'dateBorn' => '30/11/2019',
            'users_tutor_id' => '3',
            'users_professor_id' => '4'
        ]);
        DB::table('child')->insert([
            'name' => 'Leon',
            'lastName' => 'Velazquez',
            'dateBorn' => '30/11/2016',
            'users_tutor_id' => '3',
            'users_professor_id' => '4'
        ]);
        DB::table('child')->insert([
            'name' => 'David',
            'lastName' => 'Cuellar',
            'dateBorn' => '30/11/2017',
            'users_tutor_id' => '2',
            'users_professor_id' => '1'
        ]);
    }
}
