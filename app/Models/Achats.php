<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achats extends Model
{
    use HasFactory;
    protected $fillable = [

        'idcli ',
        'idprod',
        'Date_Achat',
        'Stock_Dispo',
    ];
}
