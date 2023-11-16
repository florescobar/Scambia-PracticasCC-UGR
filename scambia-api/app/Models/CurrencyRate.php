<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
    protected $table = 'currencyrate';
    protected $primaryKey = 'idCurrencyRate'; 
    public $incrementing = true;
    public $timestamps = false;
}
