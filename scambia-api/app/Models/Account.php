<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'idAcount'; 
    public $incrementing = true;
    public $timestamps = false;
    
    public function usuario()
    {
        return $this->belongsTo('App\Model\Usuario');
    }

    public function currency()
    {
        return $this->belongsTo('App\Model\Currency');
    }

}

