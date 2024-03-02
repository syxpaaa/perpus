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
        Schema::create('peminjaman', function (Blueprint $table){
            $table->integer('PeminjamanID')->autoIncrement();
            $table->integer('UserID');
            $table->integer('BukuID');
            $table->date('Tanggalpeminjaman');
            $table->date('Tanggalpengembalian');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('peminjaman');
    }
};
