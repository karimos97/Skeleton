<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Clients;
use App\Models\User;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 300; $i++) {

            $faker=Faker::create();
            $client=new Clients();
            $client->fname=$faker->firstName;
            $client->lname=$faker->lastName;
            $client->sex=$faker->title($gender = 'male'|'female');
            $client->date_birth=$faker->date($format = 'Y-m-d', $max = 'now');
            $client->phone1=$faker->phoneNumber;
            $client->email=$faker->email;
            $client->user_id=1;
            $client->save();
    }
    }
}
