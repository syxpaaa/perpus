<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoribuku_relasi extends Model
{
    use HasFactory;

     //set tabel
     protected $table = "kategoribuku_relasi";
     //set primary key
     protected $primaryKey = "KategoriBukuID";
     //set auto increment
     public $incrementing = false;
 
     //set tipe data primary key
     protected $keyType = 'string';
 
     //setting kolom yang dapat diisi
     protected $guarded = [];
}
