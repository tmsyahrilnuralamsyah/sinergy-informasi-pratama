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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('no_hp');
            $table->string('email')->unique();
            $table->string('prov')->nullable();
            $table->string('kab')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('no_ktp')->unique();
            $table->string('scan_ktp')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('rek_bank')->nullable();
            $table->string('norek_bank')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
