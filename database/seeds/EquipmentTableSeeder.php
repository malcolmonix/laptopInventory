<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateNow = new DateTime;
        DB::table('equipment_types')->insert([
            [
                'name'=>'DESKTOP',
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'name'=>'LAPTOP',
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'name'=>'RADIO',
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ],
            [
                'name'=>'OTHERS',
                'created_at' => $dateNow,
                'updated_at' => $dateNow
            ]
        ]);
    }
}

