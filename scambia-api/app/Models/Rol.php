<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'idRol'; 
    public $incrementing = true;
    public $timestamps = false;
}

