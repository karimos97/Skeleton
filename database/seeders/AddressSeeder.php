<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 30; $i++) {
            $faker=Faker::create();
            $Address=new Address();
            $Address->address=$faker->address;
            $Address->ville=rand(1,500);
            $Address->country=rand(1,200);
            $Address->zip_code=$faker->postcode;
            $Address->save();
        }
    }
}
