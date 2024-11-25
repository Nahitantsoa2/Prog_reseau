<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjoutVentController extends Controller
{
    public function liste_ajoutVent()
    {
        
        return view('insert.ajoutVent');
    }

}
