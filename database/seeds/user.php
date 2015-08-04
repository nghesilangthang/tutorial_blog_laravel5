<?php

use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class user extends Seeder
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
            $user = \App\User::create([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => $faker->md5
            ]);
        }
    }
}
