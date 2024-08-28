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
        Schema::create('process_pdhourlyoutput', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pdhourlyoutput_id');
            $table->string('process');
            $table->string('model');
            $table->string('shift');
            $table->string('lot');
            $table->string('line');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_pdhourlyoutput');
    }
};
