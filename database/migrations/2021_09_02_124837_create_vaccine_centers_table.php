<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccineCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('upazila_id');
            $table->unsignedBigInteger('vaccine_id');
            $table->unsignedBigInteger('available');
            $table->unsignedBigInteger('enabled')->default(1);
            $table->timestamps();
            $table->foreign('upazila_id')->references('id')->on('upazilas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccine_centers');
    }
}
