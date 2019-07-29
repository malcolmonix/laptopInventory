<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'NG000',
                'name' => 'HEAD OFFICE',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:34:00',
                'updated_at' => '2019-07-26 09:34:00',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'NG001',
                'name' => 'TURKEY PROJECT 1',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:34:26',
                'updated_at' => '2019-07-26 09:34:26',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'NG002',
                'name' => 'TURKEY PROJECT II',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:34:59',
                'updated_at' => '2019-07-26 09:34:59',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'NG003',
                'name' => 'ONNA ROAD PROJECTS PHASE 1',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:35:31',
                'updated_at' => '2019-07-26 09:35:31',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'NG006',
                'name' => 'ONNA ROAD PROJECTS PHASE III',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:35:58',
                'updated_at' => '2019-07-26 09:35:58',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'NG008',
                'name' => 'ONNA ROAD PROJECTS PHASE II',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:36:28',
                'updated_at' => '2019-07-26 09:36:28',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'NG009',
                'name' => 'SYRINGE FACTORY PROJECT',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:36:55',
                'updated_at' => '2019-07-26 09:36:55',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'NG010',
                'name' => 'ST GABRIEL COCONUT OIL FACTORY PROJECT',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:37:40',
                'updated_at' => '2019-07-26 09:37:40',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'NG012',
                'name' => 'ODIO ROAD PROJECT',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:38:07',
                'updated_at' => '2019-07-26 09:38:07',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'NG013',
                'name' => 'KING\'S FLOUR MILL PROJECT',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:38:38',
                'updated_at' => '2019-07-26 09:38:38',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'NG014',
                'name' => '21 STOREY OFFICE BUILDING',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:39:04',
                'updated_at' => '2019-07-26 09:39:04',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'NG015',
                'name' => 'ODIOKWU ROAD PROJECT',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 09:39:34',
                'updated_at' => '2019-07-26 09:39:34',
            ),
        ));
        
        
    }
}