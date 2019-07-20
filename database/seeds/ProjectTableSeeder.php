<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateNow = new DateTime;
        DB::table('projects')->insert([
           [
               'code'=>'NG000',
               'name'=>'HEAD OFFICE',
               'created_at' => $dateNow,
               'updated_at' => $dateNow
           ],
           [
               'code'=>'NG014',
               'name'=>'21 STOREY BUILDING',
               'created_at' => $dateNow,
               'updated_at' => $dateNow
           ] 
        ]);
    }
}
