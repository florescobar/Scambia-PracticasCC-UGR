<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'idTransaction'; 
    public $incrementing = true;
    public $timestamps = false;
    
    public function usuario()
    {
        return $this->belongsTo('App\Model\Usuario');
    }
}

