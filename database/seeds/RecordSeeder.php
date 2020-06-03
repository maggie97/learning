<?php

use Illuminate\Database\Seeder;
use App\Record;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::create([
            'child_id' => '2',
            'game_id' => '1',
            'score' => '10',
            'date' => '2020-05-01'
        ]);
        Record::create([
            'child_id' => '3',
            'game_id' => '1',
            'score' => '10',
            'date' => '2020-05-01'
        ]);
    }
}
