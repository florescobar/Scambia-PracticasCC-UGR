<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeNotification extends Model
{
    protected $table = 'typenotification';
    protected $primaryKey = 'idTypeNotification'; 
    public $incrementing = true;
    public $timestamps = false;
    
}

