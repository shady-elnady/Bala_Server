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
        Schema::create('shipment_files', function (Blueprint $table) {
            $table->id();
            $table->text('file');
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
        Schema::dropIfExists('shipment_files');
    }
};
