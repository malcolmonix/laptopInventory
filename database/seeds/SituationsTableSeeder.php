<?php

use Illuminate\Database\Seeder;

class SituationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('situations')->delete();
        
        \DB::table('situations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ASSIGNED',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 10:26:15',
                'updated_at' => '2019-07-26 10:26:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'IN-STOCK',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 10:26:15',
                'updated_at' => '2019-07-26 11:45:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'FAULTY',
                'deleted_at' => '2019-07-26 11:50:49',
                'created_at' => '2019-07-26 10:26:15',
                'updated_at' => '2019-07-26 11:50:49',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'RETURNED',
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 14:13:17',
                'updated_at' => '2019-07-26 14:13:17',
            ),
        ));
        
        
    }
}