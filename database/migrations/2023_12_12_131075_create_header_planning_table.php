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
        Schema::create('header_planning', function (Blueprint $table) {
            $table->string('dokumen_fpp')->primary();
            $table->string('dokumen_frp');
            $table->foreign('dokumen_frp')->references('dokumen_frp')->on('header_request');
            $table->timestamp('tgl_fpp')->nullable();
            $table->string('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->float('jumlah_item');
            $table->bigInteger('grand_total');
            $table->text('disetujui_m_sales');
            $table->text('disetujui_m_finance');
            $table->text('disetujui_m_purchasing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_planning');
    }
};
