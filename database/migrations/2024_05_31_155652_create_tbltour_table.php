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
        Schema::create('tbltour', function (Blueprint $table) {
            $table->string('idTour', 15)->primary();
            $table->string('name', 50);
            $table->date('startDay');
            $table->date('endDay');
            $table->decimal('cost', 10, 2);
            $table->string('imageTour');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('idAddress')->nullable();
            $table->string('idHotel', 15)->nullable();
            $table->string('idVehicle', 15)->nullable();
            $table->string('idTourGuide', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbltour');
    }
};
