<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoribuku extends Model
{
    use HasFactory;

     //set tabel
     protected $table = "kategoribuku";
     //set primary key
     protected $primaryKey = "KategoriID";
     //set auto increment
     public $incrementing = false;
 
     //set tipe data primary key
     protected $keyType = 'string';
 
     //setting kolom yang dapat diisi
     protected $guarded = [];
}
