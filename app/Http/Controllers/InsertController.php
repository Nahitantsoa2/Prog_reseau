<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function liste_insert()
    {
        return view('insert.insert');
    }
}
