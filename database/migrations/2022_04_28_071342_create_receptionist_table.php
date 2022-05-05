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
        Schema::create('receptionist', function (Blueprint $table) {
            $table->id();
            $table->string('Rec_Email')->unique();
            $table->string('Rec_Username');
            $table->string('Rec_Lastname');
            $table->string('Rec_Firstname');
            $table->string('Rec_Pass');
            $table->timestamp('Rec_Birthday');
            $table->string('Rec_Gender');
            $table->string('Rec_PhoneNum')->unique();
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
        Schema::dropIfExists('receptionist');
    }
};
