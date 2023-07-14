<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //       Metodo con array 
        //        $trains = [
        //           [
        //             'agency' => 'Trenitalia',
        //               'departure_station' => 'Roma Termini',
        //              'arrival_station' => 'Milano',
        //              'departure_time' => '2023-07-13 12:06:31',
        //             'arrival_time' => '2023-07-13 14:11:31',
        //              'train_code' => 'HYJ7PLC',
        //             'number_of_carriages' => '8',
        //              'in_time' => True,
        //              'deleted' => True,
        //          ],
        //          [
        //              'agency' => 'Trenitalia',
        //              'departure_station' => 'Roma Termini',
        //              'arrival_station' => 'Napoli',
        //              'departure_time' => '2023-07-13 14:06:31',
        //              'arrival_time' => '2023-07-13 19:22:04',
        //              'train_code' => 'EFG0HAZX',
        //              'number_of_carriages' => '12',
        //              'in_time' => false,
        //              'deleted' => True,
        //          ],
        //      ];
        //
        //      foreach ($trains as $arrTrain) {
        //          Train::create($arrTrain);
        //        }

        // metodo con faker 
        for ($i = 0; $i <= 10; $i++) {
            Train::create([
                'agency' => 'Trenitalia',
                'departure_station' => $faker->city(),
                'arrival_station' => $faker->city(),
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                'train_code' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
                'number_of_carriages' => $faker->numberBetween(4, 15),
                'in_time' => $faker->boolean(),
                'deleted' => $faker->boolean(),
            ]);
        }
    }
}
