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
            'dateBorn' => '30/07/2020',
            'users_tutor_id' => '2',
            'users_professor_id' => '1'
        ]);
    }
}
