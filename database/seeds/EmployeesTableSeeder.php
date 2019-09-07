<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employees')->delete();
        
        \DB::table('employees')->insert(array (
            0 => 
            array (
                'id' => 1,
                'employee_id' => '000964',
                'name' => 'Kufre Akpabio',
                'position' => 'Admin Officer',
                'project_id' => 1,
                'active' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-07-27 00:00:00',
                'updated_at' => '2019-07-27 00:00:00',
            ),
        ));
        
        
    }
}