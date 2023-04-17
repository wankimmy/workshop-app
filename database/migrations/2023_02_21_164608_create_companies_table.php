<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->index();
            $table->string('c_logo')->nullable();
            $table->string('c_name')->index();
            $table->string('c_ssm', 45)->unique()->nullable();
            $table->string('c_phone_no')->index();
            $table->string('c_address')->nullable();
            $table->string('c_city', 45)->nullable();
            $table->string('c_state', 45)->nullable();
            $table->integer('c_postcode')->nullable();
            $table->string('c_country', 45)->nullable();
            $table->enum('c_status', ['pending', 'active', 'deactive'])->default('pending')->index();
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
        Schema::dropIfExists('companies');
    }
}
