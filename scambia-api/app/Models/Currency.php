<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currency';
    protected $primaryKey = 'idCurrency'; 
    public $incrementing = true;
    public $timestamps = false;
}

