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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('Admin_Email')->unique();
            $table->string('Admin_Username');
            $table->string('Admin_Lastname');
            $table->string('Admin_Firstname');
            $table->string('Admin_Pass');
            $table->timestamp('Admin_Birthday');
            $table->string('Admin_Gender');
            $table->string('Admin_PhoneNum')->unique();
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
        Schema::dropIfExists('admin');
    }
};
