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
        Schema::create('pullstrengthtest', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('station')->nullable();
            $table->string('model')->nullable();
            $table->string('lot')->nullable();
            $table->string('shift')->nullable();
            $table->string('line')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->text('deskcription')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pullstrengthtest');
    }
};
