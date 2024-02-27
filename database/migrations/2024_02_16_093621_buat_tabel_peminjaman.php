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
            $table->integer('PeminjamanID',11);
            $table->integer('UserID', 11);
            $table->integer('BukuID', 11);
            $table->date('Tanggalpeminjaman');
            $table->date('Tanggalpengembalian');
            $table->timestamps();
            $table->primary('peminjamanID');
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
