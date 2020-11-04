<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $table     = 'user';
    protected $fillable = ['nama','nim','email','password'];
}
