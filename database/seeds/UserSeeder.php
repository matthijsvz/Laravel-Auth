<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('nl_NL');

        for($i = 0; $i < 50; $i++) {
            App\User::create(
            [
                'name' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('secret')
            ]
            );
        }
    }
}