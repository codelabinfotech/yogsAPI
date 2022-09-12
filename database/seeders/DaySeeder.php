<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $days = [
            ['days'   =>  1],
            ['days'   =>  2],
            ['days'   =>  3],
            ['days'   =>  4],
            ['days'   =>  5],
            ['days'   =>  6],
        ];

        \DB::table('day')->insert($days);
        // \App\Models\Days::create($days);
    }
}
