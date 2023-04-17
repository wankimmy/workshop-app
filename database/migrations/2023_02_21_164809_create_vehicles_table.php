<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('c_id')->index();
            $table->string('v_model')->index();
            $table->string('v_model_year')->index()->nullable();
            $table->string('v_plate_no')->index();
            $table->enum('v_type', ['car', 'motorcycle', '4x4', 'van', 'lorry'])->default('car')->index();
            $table->bigInteger('v_user_id')->index();
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
        Schema::dropIfExists('vehicles');
    }
}
