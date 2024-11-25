<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateur;


class SinginCotroller extends Controller
{
    public function liste_singin()
    {
        return view('connexion.singin');
    }


}