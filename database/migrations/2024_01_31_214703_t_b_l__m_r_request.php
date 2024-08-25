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
        Schema::create('TBL_MRRequest', function (Blueprint $table) {
            $table->id();
            $table->string('noMrr')->nullable();
            $table->string('RequestDept')->nullable();
            $table->string('Process')->nullable();
            $table->string('Lot')->nullable();
            $table->string('Name')->nullable();
            $table->string('Description')->nullable();
            $table->string('Shift')->nullable();
            $table->string('Date')->nullable();
            $table->string('BreakDownTime')->nullable();
            $table->string('ReportTime')->nullable();
            $table->string('SignSpvProd')->nullable();
            $table->string('Judgement')->nullable();
            $table->string('Result')->nullable();
            $table->string('RepairBy')->nullable();
            $table->string('RespownTime')->nullable();
            $table->string('RepairStartTime')->nullable();
            $table->string('RepairEndTime')->nullable();
            $table->string('QcStartTime')->nullable();
            $table->string('QcEndTime')->nullable();
            $table->string('SignByQc')->nullable();
            $table->string('QcName')->nullable();
            $table->string('QcDateSign')->nullable();
            $table->string('SignByProd')->nullable();
            $table->string('ProdName')->nullable();
            $table->string('ProdDateSign')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TBL_MRRequest');
    }
};
