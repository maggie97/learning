<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Maggie',
            'lastName' => 'Méndez',
            'email' => 'maguii_3000@hotmail.com',
            'password' => Hash::make('123456789'),
            'rol' => 'P'
        ]);
        DB::table('users')->insert([
            'name' => 'Neftali',
            'lastName' => 'Méndez',
            'email' => 'margaration_3000@hotmail.com',
            'password' => Hash::make('password'),
            'rol' => 'T'
        ]);
        DB::table('users')->insert([
            'name' => 'tutor2',
            'lastName' => '',
            'email' => 'a1@hotmail.com',
            'password' => Hash::make('123456789'),
            'rol' => 'T'
        ]);
        DB::table('users')->insert([
            'name' => 'professor2',
            'lastName' => '',
            'email' => 'a2@hotmail.com',
            'password' => Hash::make('123456789'),
            'rol' => 'P'
        ]);
    }
}
