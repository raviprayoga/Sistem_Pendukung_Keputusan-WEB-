<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_matkul_wajib_user extends Model
{
    protected $table     = 'model_matkul_wajib_user';
    protected $fillable = ['id', 'user_id'. 'model_matkul_wajib_id','nilai_huruf' ,'nilai', 'bobot'];
}
