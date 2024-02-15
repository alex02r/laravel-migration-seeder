<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

require_once 'vendor/autoload.php';


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->start_staton = $faker->city();
            $new_train->destination = $faker->city();
            $new_train->start_time = $faker->time('H:i');
            $new_train->end_time = $faker->time('H:i');
            $new_train->code = $faker->randomNumber(5, true);
            $new_train->carriages = $faker->randomNumber(2, false);
            $new_train->late = $faker->boolean();
            $new_train->deleted = $faker->boolean();

        }
    }
}
