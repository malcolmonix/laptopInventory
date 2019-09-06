<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('model')->nullable();
            $table->integer('brand_id');
            $table->string('serialnumber');
<<<<<<< HEAD
            $table->integer('equipment_type_id');
            $table->integer('situation_id')->nullable();
            $table->enum('status', ['used', 'new', 'faulty']);
            $table->integer('user_id');
            $table->string('computer_name')->nullable();            
            $table->string('mac_address')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('comment')->nullable();
=======
            $table->string('equipment_type_id');
            $table->string('situation_id');
            $table->string('user_id')->default('');
            $table->string('project_id')->default('');
            $table->string('comment');
>>>>>>> 6552989b297db26fc10311507edfc08a153d210a
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipments');
    }
}
