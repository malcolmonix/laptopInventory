<?php

use Illuminate\Database\Seeder;

class SituationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateNow = new DateTime;
        DB::table('situations')->insert([
        [
            'name'=>'ASSIGNED',
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ],
        [
            'name'=>'AVAILABLE',
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ],
        [
            'name'=>'DAMAGED',
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]
        ]);
    }
}
