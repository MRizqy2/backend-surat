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
            $table->foreign('user_id')->reference('user_id')->on('user_role');
            $table->int('Jumlah_item');

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
