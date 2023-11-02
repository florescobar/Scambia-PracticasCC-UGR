<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';
    protected $primaryKey = 'idNotification'; 
    public $incrementing = true;
    public $timestamps = false;
}

