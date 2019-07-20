<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateNow = new DateTime;
        DB::table('users')->insert([
            [
                'name'=>'Ime Iteh',
                'email'=>'iteleh97@gmail.com',
                'password'=>bcrypt('iteh2019'),
                'active'=>'1',
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ]
        ]);
    }
}
