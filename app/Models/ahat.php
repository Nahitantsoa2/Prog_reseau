<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ahat extends Model
{
    use HasFactory;
    protected $fillable = [

        'idcli ',
        'idprod',
        'Date_validation',
        'Montant_Total',
    ];
}
