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
        Schema::create('koleksipribadi', function (Blueprint $table){
            $table->integer('KoleksiID',11);
            $table->string('UserID', 255);
            $table->string('Penulis', 255);
            $table->string('Penerbit', 255);
            $table->timestamps();
            $table->primary('koleksiID');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('koleksipribadi');
    }
};
