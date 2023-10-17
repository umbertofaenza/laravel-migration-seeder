<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->company = 'Italo';
        $train->origin_station = 'Roma';
        $train->destination_station = 'Torino';
        $train->departure_datetime = '2023-10-17 18:23:20';
        $train->arrival_datetime = '2023-10-17 21:23:20';
        $train->train_code = '17588632';
        $train->coaches = 7;
        $train->on_time = 1;
        $train->cancelled = 0;

        $train->save();
    }
}