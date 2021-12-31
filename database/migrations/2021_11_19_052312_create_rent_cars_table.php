<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_cars', function (Blueprint $table) {
            $table->id();
            $table->text('session_id')->nullable();
            $table->foreignId('car_id')->nullable();
            $table->foreignId('pickup_district_id')->nullable();
            $table->foreignId('destination_district_id')->nullable();
            $table->string('pick_up_point')->nullable();
            $table->string('destination_up_point')->nullable();
            $table->string('date')->nullable();
            $table->string('mobile')->nullable();
            $table->double('rent', 20, 4)->nullable();
            $table->enum('status', ['Hold', 'Is Agree?', 'Agree', 'Disagree'])->default('Hold');
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
        Schema::dropIfExists('rent_cars');
    }
}
