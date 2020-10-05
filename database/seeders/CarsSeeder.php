<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create('ru_RU');

        foreach (range(1, 100) as $index) {

            DB::table('cars')->insert([
                'name' => $faker->name
            ]);

        }
    }

}
