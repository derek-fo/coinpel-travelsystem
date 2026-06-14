<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
        protected $fillable = [ // quais colunas podem ser preenchidas
        'name',
        'license_number'
    ];
}
