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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('Cus_Email');
            $table->string('Cus_Username');
            $table->string('Cus_Fname');
            $table->string('Cus_Lname');
            $table->string('Cus_Address');
            $table->string('Cus_Number')->unique();
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
        Scheme::dropIfExists('customer');
    }
};
