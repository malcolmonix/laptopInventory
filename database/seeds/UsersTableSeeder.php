<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ime Iteh',
                'email' => 'iteleh97@gmail.com',
                'password' => '$2y$10$NSTsoxN6sjVshUQpt8MH0.R7PDTMYAHTTgHdMW7Wh5wAo8vokFrGO',
                'active' => 1,
                'role_id' => 1,
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-26 10:26:15',
                'updated_at' => '2019-07-26 10:26:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Uduak Essien',
                'email' => 'acushla4real@gmail.com',
                'password' => '$2y$10$C9I84Q9VbSMb/NoV.3yjvuoPwU8e0j9oUYYKT1xnV0NE4ibsNPDgS',
                'active' => 1,
                'role_id' => 1,
                'deleted_at' => NULL,
                'remember_token' => '5RJN19kMCLehjiYvdmISbj3PFrpE209evVicS14vPzkGgvEcKujo3OiNOgP3',
                'created_at' => '2019-07-26 10:28:17',
                'updated_at' => '2019-07-26 10:28:17',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Smartgig',
                'email' => 'smartgig@yandex.com',
                'password' => '$2y$10$yssDYfMQwaA66jJCA6tDCubjvM2A4IsqG/5gJLC39J1jvTP9J7VqW',
                'active' => 1,
                'role_id' => 4,
                'deleted_at' => NULL,
                'remember_token' => 'Yq7LazYQ7f9LCqIlpP7JZRSktb76OcVRXpqOvcwgqCjWDokGBeZvMG9g4a86',
                'created_at' => '2019-07-27 05:25:58',
                'updated_at' => '2019-07-27 05:25:58',
            ),
        ));
        
        
    }
}