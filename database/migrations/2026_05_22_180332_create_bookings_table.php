<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            $table->string('nama_mahasiswa');

            $table->string('nim');

            $table->string('no_hp');

            $table->foreignId('console_id');

            $table->date('tanggal');

            $table->time('jam_mulai');

            $table->string('status')->default('pending');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};