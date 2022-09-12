<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExcersiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $excersice = [
            [
                'day_id' => 6,
                'title'  => 'Excersice 1',
                'description'   =>  'Excersice 1',
                'image'  => 'images/img-1',
            ],
            [
                'day_id' => 3,
                'title'  => 'Excersice 1',
                'description'   =>  'Excersice 1',
                'image'  => 'images/img-1',
            ],
            [
                'day_id' => 5,
                'title'  => 'Excersice 1',
                'description'   =>  'Excersice 1',
                'image'  => 'images/img-1',
            ],
            [
                'day_id' => 1,
                'title'  => 'Excersice 1',
                'description'   =>  'Excersice 1',
                'image'  => 'images/img-1',
            ],
            [
                'day_id' => 2,
                'title'  => 'Excersice 1',
                'description'   =>  'Excersice 1',
                'image'  => 'images/img-1',
            ],
            [
                'day_id' => 5,
                'title'  => 'Excersice 2',
                'description'   =>  'Excersice 2',
                'image'  => 'images/img-1',
            ],
        ];

        \DB::table('excercise')->insert($excersice);
    }
}
