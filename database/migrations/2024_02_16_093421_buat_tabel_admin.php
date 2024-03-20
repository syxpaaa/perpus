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
        Schema::create('admin', function (Blueprint $table){
            $table->integer('AdminID')->autoIncrement();
            $table->string('Username', 255);
            $table->string('password', 255);
            $table->string('email', 255);
            $table->string('namalengkap',255);
            $table->string('noHp',13);
            $table->enum('level',['admin','petugas']);
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::drop('admin');
    }
};
