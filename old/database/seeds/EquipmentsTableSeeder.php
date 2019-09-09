<?php

use Illuminate\Database\Seeder;

class EquipmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('equipments')->delete();
        
        \DB::table('equipments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'HP 15',
                'model' => NULL,
                'brand_id' => 2,
                'serialnumber' => '3CE5065726',
                'equipment_type_id' => 1,
                'situation_id' => 2,
                'status' => 'used',
                'user_id' => 1,
                'computer_name' => 'NGRCOMP0026',
                'mac_address' => NULL,
                'ip_address' => NULL,
                'comment' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 12:23:03',
                'updated_at' => '2019-07-26 16:23:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'LATITUDE 3570',
                'model' => 'Latitude',
                'brand_id' => 1,
                'serialnumber' => 'D2XV4C2',
                'equipment_type_id' => 1,
                'situation_id' => 1,
                'status' => 'used',
                'user_id' => 2,
                'computer_name' => 'NGRCOMP0058',
                'mac_address' => NULL,
                'ip_address' => NULL,
                'comment' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 12:34:28',
                'updated_at' => '2019-07-26 12:34:28',
            ),
        ));
        
        
    }
}