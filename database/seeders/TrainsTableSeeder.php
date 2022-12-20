<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();

        $train->company = $faker->company();
        $train->from = $faker->word();
        $train->to = $faker->word();
        $train->departure_time = $faker->dateTime();
        $train->arrival_time = $faker->dateTime();
        $train->code = $faker->randomNumber(5, false);
        $train->cars = $faker->randomDigit();
        $train->is_on_time = $faker->boolean();
        $train->cancelled = $faker->boolean();
    }
}
