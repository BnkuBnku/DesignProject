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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');

            $table->unsignedBigInteger('resort_register_id');
            $table->foreign('resort_register_id')->references('id')->on('resort_register')->onDelete('cascade');

            $table->unsignedBigInteger('receptionist_id');
            $table->foreign('receptionist_id')->references('id')->on('receptionist')->onDelete('cascade');

            $table->decimal('Estimation_Fare', 8,2);
            $table->decimal('Standard_Payment', 8,2);
            $table->decimal('VAT', 8,2);
            $table->decimal('Total_Payment', 8,2);
            $table->string('Payment_Method');
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
        Schema::dropIfExists('transaction');
    }
};
