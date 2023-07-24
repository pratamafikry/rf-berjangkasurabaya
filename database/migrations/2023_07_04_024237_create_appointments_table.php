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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id');
            $table->foreignId('user_id');
            $table->foreignId('driver_id')->nullable();
            $table->foreignId('sesi_id')->nullable();
            $table->timestamp('tgl_buat')->nullable();
            $table->timestamp('tgl_temu')->nullable();
            $table->string('slug')->unique();
            $table->time('jam');
            $table->string('sesi');
            $table->string('nama');
            $table->string('team');
            $table->string('manager');
            $table->string('pendamping');
            $table->string('nama_client');
            $table->string('status');
            $table->string('tujuan');
            $table->string('alamat');
            $table->string('kendaraan');
            // $table->string('driver')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
