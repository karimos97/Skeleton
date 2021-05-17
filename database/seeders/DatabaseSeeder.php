<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
/*         $this->call(ClientSeeder::class);
        $this->call(Countries::class);
        $this->call(Regions::class);
        $this->call(Cities::class);*/
        $this->call(CarBrands::class);
        $this->call(CarModels::class);
    }
}
