<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'name' => 'Bubbles',
            'levels' => 1,
        ]);
        DB::table('games')->insert([
            'name' => 'Memory',
            'levels' => 1,
        ]);
    }
}
