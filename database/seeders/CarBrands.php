<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use DB;
class CarBrands extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=array(
                    array('brand_name'=>'ALFA-ROMEO'),
                    array('brand_name'=>'AUDI'),
                    array('brand_name'=>'BMW'),
                    array('brand_name'=>'CHEVROLET'),
                    array('brand_name'=>'FIAT'),
                    array('brand_name'=>'FORD'),
                    array('brand_name'=>'HONDA'),
                    array('brand_name'=>'HYUNDAI'),
                    array('brand_name'=>'JAGUAR'),
                    array('brand_name'=>'JEEP'),
                    array('brand_name'=>'KIA'),
                    array('brand_name'=>'LAND-ROVER'),
                    array('brand_name'=>'MASERATI'),
                    array('brand_name'=>'MAZDA'),
                    array('brand_name'=>'MERCEDES'),
                    array('brand_name'=>'MITSUBISHI'),
                    array('brand_name'=>'PEUGEOT'),
                    array('brand_name'=>'PORSCHE'),
                    array('brand_name'=>'RENAULT'),
                    array('brand_name'=>'SEAT'),
                    array('brand_name'=>'SKODA'),
                    array('brand_name'=>'SUZUKI'),
                    array('brand_name'=>'TOYOTA'),
                    array('brand_name'=>'VOLKSWAGEN'),
                    array('brand_name'=>'VOLVO'),
                    array('brand_name'=>'ABARTH'),
                    array('brand_name'=>'AC'),
                    array('brand_name'=>'ACREA'),
                    array('brand_name'=>'ACURA'),
                    array('brand_name'=>'AIXAM'),
                    array('brand_name'=>'ALPINE'),
                    array('brand_name'=>'ANHUI'),
                    array('brand_name'=>'ARO'),
                    array('brand_name'=>'ASTON-MARTIN'),
                    array('brand_name'=>'AUSTIN'),
                    array('brand_name'=>'AUTOBIANCHI'),
                    array('brand_name'=>'BELLIER'),
                    array('brand_name'=>'BENTLEY'),
                    array('brand_name'=>'BERTONE'),
                    array('brand_name'=>'BUGATTI'),
                    array('brand_name'=>'BUGGY'),
                    array('brand_name'=>'BUICK'),
                    array('brand_name'=>'BURSTNER'),
                    array('brand_name'=>'BYD'),
                    array('brand_name'=>'CADILLAC'),
                    array('brand_name'=>'CHANA'),
                    array('brand_name'=>'CHANGFENG'),
                    array('brand_name'=>'CHANGHE'),
                    array('brand_name'=>'CHATENET'),
                    array('brand_name'=>'CHERY'),
                    array('brand_name'=>'CHRYSLER'),
                    array('brand_name'=>'CITROEN'),
                    array('brand_name'=>'CUPRA'),
                    array('brand_name'=>'DACIA'),
                    array('brand_name'=>'DAEWOO'),
                    array('brand_name'=>'DAIHATSU'),
                    array('brand_name'=>'DARMONT'),
                    array('brand_name'=>'DE-TOMASO'),
                    array('brand_name'=>'DFSK'),
                    array('brand_name'=>'DODGE'),
                    array('brand_name'=>'DONGFENG'),
                    array('brand_name'=>'DS'),
                    array('brand_name'=>'FAW'),
                    array('brand_name'=>'FERRARI'),
                    array('brand_name'=>'FOTON'),
                    array('brand_name'=>'GAZ'),
                    array('brand_name'=>'GEELY'),
                    array('brand_name'=>'GMC'),
                    array('brand_name'=>'GME'),
                    array('brand_name'=>'GREAT-WALL'),
                    array('brand_name'=>'GWM'),
                    array('brand_name'=>'HAFEI'),
                    array('brand_name'=>'HUMMER'),
                    array('brand_name'=>'INFINITI'),
                    array('brand_name'=>'ISUZU'),
                    array('brand_name'=>'IVECO'),
                    array('brand_name'=>'JMC'),
                    array('brand_name'=>'JONWAY'),
                    array('brand_name'=>'KTM'),
                    array('brand_name'=>'KYMCO'),
                    array('brand_name'=>'LADA'),
                    array('brand_name'=>'LAMBORGHINI'),
                    array('brand_name'=>'LANCIA'),
                    array('brand_name'=>'LAND'),
                    array('brand_name'=>'LANDWIND'),
                    array('brand_name'=>'LEXUS'),
                    array('brand_name'=>'LIFAN'),
                    array('brand_name'=>'LIGIER'),
                    array('brand_name'=>'LINCOLN'),
                    array('brand_name'=>'LOTUS'),
                    array('brand_name'=>'MAHINDRA'),
                    array('brand_name'=>'MATRA'),
                    array('brand_name'=>'MAYBACH'),
                    array('brand_name'=>'MCLAREN'),
                    array('brand_name'=>'MG'),
                    array('brand_name'=>'MICROCAR'),
                    array('brand_name'=>'MINI'),
                    array('brand_name'=>'MORGAN'),
                    array('brand_name'=>'MPM'),
                    array('brand_name'=>'NISSAN'),
                    array('brand_name'=>'OPEL'),
                    array('brand_name'=>'PLYMOUTH'),
                    array('brand_name'=>'POLARIS'),
                    array('brand_name'=>'PONTIAC'),
                    array('brand_name'=>'QUAD'),
                    array('brand_name'=>'ROLLS-ROYCE'),
                    array('brand_name'=>'ROVER'),
                    array('brand_name'=>'SAAB'),
                    array('brand_name'=>'SANTANA'),
                    array('brand_name'=>'SECMA'),
                    array('brand_name'=>'SIMCA'),
                    array('brand_name'=>'SMART'),
                    array('brand_name'=>'SPYKER'),
                    array('brand_name'=>'SSANGYONG'),
                    array('brand_name'=>'SUBARU'),
                    array('brand_name'=>'TALBOT'),
                    array('brand_name'=>'TATA'),
                    array('brand_name'=>'TESLA'),
                    array('brand_name'=>'TRIUMPH'),
                    array('brand_name'=>'TVR'),
                    array('brand_name'=>'VENTURI'),
                    array('brand_name'=>'WIESMANN'),
                    array('brand_name'=>'WULING'),
                    array('brand_name'=>'ZOTYE'),
        );

        DB::table('car_brands')->insert($list);
    }
}
