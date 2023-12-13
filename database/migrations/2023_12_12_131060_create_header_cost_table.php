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
        Schema::create('header_cost', function (Blueprint $table) {
            // $table->id();
            $table->foreign('documen_frp')->references('documen_frp')->on('header_request');
            $table->string('documen_fpc')->primary();
            $table->foreign('user_id')->reference('user_id')->on('users');
            $table->integer('Jumlah_item');
            $table->double('grand_total_est_cost');
            $table->double('grand_total_cost');
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
        Schema::dropIfExists('header_cost');
    }
};
