<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipment_payment_details', function (Blueprint $table) {
            $table->id();
            $table->string("details");
            //
            $table->unsignedBigInteger('payment_status_filed_id');
            $table->foreign('payment_status_filed_id')->references('id')->on('payment_status_fileds');
            //
            $table->unsignedBigInteger('shipment_id');
            $table->foreign('shipment_id')->references('id')->on('shipments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_payment_details');
    }
};
