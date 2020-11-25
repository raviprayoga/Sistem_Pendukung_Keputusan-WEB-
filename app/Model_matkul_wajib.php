<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_matkul_wajib extends Model
{
    protected $table     = 'matkul_wajib';
    protected $fillable = ['kode_mk','nama_matkul_wajib','sks','semester'];
}
