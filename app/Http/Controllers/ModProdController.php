<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModProdController extends Controller
{
    public function liste_modProd()
    {
        return view('modiffication.modProd');
    }
}
