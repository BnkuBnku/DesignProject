<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resort_register', function (Blueprint $table) {
            $table->id();
            $table->string('Resort_name');
            $table->decimal('ResortLatitude_Coor', 8,6);
            $table->decimal('ResortLongitude_Coor', 9,6);
            $table->string('Resort_Address');
            $table->string('resort_pic_url');
            $table->decimal('Services', 8,2);
            $table->decimal('Cottages', 8,2);
            $table->decimal('Essentials', 8,2);
            $table->decimal('PerStay', 8,2);
            $table->decimal('PerAdult', 8,2);
            $table->decimal('PerChild', 8,2);
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
        Schema::dropIfExists('resort_register');
    }
};
