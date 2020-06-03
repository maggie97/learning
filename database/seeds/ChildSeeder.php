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
        DB::table('children')->insert([
            'name' => 'Mateo',
            'lastName' => 'Arias',
            'dateBorn' => '2014-07-30',
            'users_tutor_id' => '2',
            'users_professor_id' => '1'
        ]);
        DB::table('children')->insert([
            'name' => 'Aaron',
            'lastName' => 'Mendez',
            'dateBorn' => '2019-11-30',
            'users_tutor_id' => '3',
            'users_professor_id' => '4'
        ]);
        DB::table('children')->insert([
            'name' => 'Leon',
            'lastName' => 'Velazquez',
            'dateBorn' => '2016-11-30',
            'users_tutor_id' => '3',
            'users_professor_id' => '4'
        ]);
        DB::table('children')->insert([
            'name' => 'David',
            'lastName' => 'Cuellar',
            'dateBorn' => '2017-11-30',
            'users_tutor_id' => '2',
            'users_professor_id' => '1'
        ]);
    }
}
