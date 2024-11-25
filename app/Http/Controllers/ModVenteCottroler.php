<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModVenteController extends Controller
{
    public function liste_modVente()
    {
        return view('modiffication.modVente');
    }
}
