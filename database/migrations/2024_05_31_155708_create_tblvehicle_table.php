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
        Schema::create('tblvehicle', function (Blueprint $table) {
            $table->string('idVehicle', 15)->primary();
            $table->string('name', 50);
            $table->string('licensePlate', 20)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblvehicle');
    }
};
