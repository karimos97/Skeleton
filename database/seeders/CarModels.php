<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CarModels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $renault=array(
                       array('model_name'=>'CAPTUR','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'CLIO','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'ESPACE','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'ESTAFETTE','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'EXPRESS','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'FLUENCE','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'KADJAR','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'KANGOO','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'KOLEOS','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'LAGUNA ','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'LAGUNA COUPE','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'LAGUNA ESTATE','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'MEGANE','model_date'=>date('Y-m-d'),'brand_id'=>22),
                       array('model_name'=>'MASTER','model_date'=>date('Y-m-d'),'brand_id'=>22));


                       DB::table('car_models')->insert($renault);



    }
}
