<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function liste_Client()
    {
        return view('client.listeClient');
    }


}
