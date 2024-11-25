<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $table = 'ventes';
    protected $fillable = [
        'Id_client',
        'Nom_produit',
        'Date_validation',
        'Montant_Total',
        

    ];
}
