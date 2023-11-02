<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ApplicationSettings extends Model
{
    protected $table = 'applicationsettings';
    protected $primaryKey = 'idSettings'; 
    public $incrementing = true;
    public $timestamps = false;
}

