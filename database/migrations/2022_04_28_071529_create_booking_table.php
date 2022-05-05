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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');

            $table->string('Cus_Username');
            $table->Integer('HAdult_Count');
            $table->Integer('HChild_Count')->nullable();
            $table->timestamp('Check_In')->nullable();
            $table->timestamp('Check_Out')->nullable();
            $table->Integer('Referral_Num')->unique();
            $table->string('Status');
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
        Schema::dropIfExists('booking');
    }
};
