<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    protected $table = 'usernotification';
    protected $primaryKey = 'idUserNotification'; 
    public $incrementing = true;
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function typenotification()
    {
        return $this->belongsTo('App\Model\TypeNotification');
    }
}

