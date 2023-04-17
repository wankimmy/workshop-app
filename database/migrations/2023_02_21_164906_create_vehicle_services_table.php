<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('c_id')->index();
            $table->string('v_id')->index();
            $table->double('vs_price', 8, 2);
            $table->double('vs_total_price', 8, 2);
            $table->bigInteger('v_created_by')->index();
            $table->bigInteger('v_service_by')->index();
            $table->enum('vs_status', ['pending', 'verified', 'approved', 'rejected'])->default('pending')->index();
            $table->longText('vs_desc');
            $table->text('vs_comment')->nullable();
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
        Schema::dropIfExists('vehicle_services');
    }
}
