<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_matkul_pilihan extends Model
{
    protected $table     = 'matkul_pilihan';
    protected $fillable = ['kode_mk','nama_matkul_pilihan','sks','semester','silabus','materi_pokok'];
}
