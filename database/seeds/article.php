<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class article extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<1000; $i++) {
            $use = \App\Article::create([
                'title' => $faker->title,
                'detail' => $faker->paragraph,
                'user_add' => $faker->numberBetween(1, 1000)
            ]);
        }
    }
}
