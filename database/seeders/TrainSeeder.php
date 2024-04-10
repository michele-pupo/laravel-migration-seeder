<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->agency = "Trenitalia";
        $newTrain->departure_station = "Milano";
        $newTrain->arrival_station = "Lamezia";
        $newTrain->departure_time = "2024-02-23 20:30:00";
        $newTrain->arrival_time = "2024-03-24 8:30:00";
        $newTrain->train_code = 202;
        $newTrain->n_carriages = 10;

        $newTrain->save();
    }
}
