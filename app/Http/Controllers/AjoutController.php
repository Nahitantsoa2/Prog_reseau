<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjoutController extends Controller
{
    public function liste_ajout()
    {
        
        return view('insert.ajout');
    }

}
