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
        Schema::create('accessory_car', function (Blueprint $table) {

            //Chaves estrangeiras
            $table->foreignId('car_id')->constrained()->restrictOnDelete();
            $table->foreignId('accessory_id')->constrained()->restrictOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessory_car');
    }
};
