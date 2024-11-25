<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Ajout de la directive d'utilisation pour Auth
use App\Http\Requests\LoginRequest; // Correction du chemin vers LoginRequest

class LoginController extends Controller
{
    public function liste_login()
    {
        return view('connexion.login');
    }

    public function liste_doLogin()
    {
        return redirect('/menu');;
    }
}
