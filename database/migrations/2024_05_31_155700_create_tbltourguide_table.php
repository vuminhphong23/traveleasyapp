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
        Schema::create('tbltourguide', function (Blueprint $table) {
            $table->string('idTourGuide', 15)->primary();
            $table->unsignedBigInteger('idAddress')->nullable();
            $table->string('name', 50);
            $table->string('phone', 50)->nullable();
            $table->string('email', 50)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbltourguide');
    }
};
