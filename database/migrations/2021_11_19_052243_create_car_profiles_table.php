<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->enum('type',['Private Car', 'Motor Cycle', 'CNG']);
            $table->string('name');
            $table->string('car_no');
            $table->double('seat', 10, 2);
            $table->string('mobile');
            $table->text('image');
            $table->enum('status',['Free', 'Busy'])->default('Free');
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
        Schema::dropIfExists('car_profiles');
    }
}
