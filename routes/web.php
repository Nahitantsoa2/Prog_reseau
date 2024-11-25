<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\ModProdController;
use App\Http\Controllers\AjoutController;
use App\Http\Controllers\AjoutVentController;
use App\Http\Controllers\ModVenteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SinginCotroller;


Route::get('/login', [LoginController::class, 'liste_login']) ;

Route::get('/menu', [MenuController::class, 'liste_menu']) ;
Route::get('/singin', [SinginCotroller::class, 'liste_singin']);
Route::get('/ajout', [AjoutController::class, 'liste_ajout']);
Route::get('/ajoutVent', [AjoutVentController::class, 'liste_ajoutVent']);
Route::get('/vente', [VenteController::class, 'liste_vente']);
Route::get('/client', [ClientController::class, 'liste_client']);
Route::get('/produit', [ProduitController::class, 'liste_produit']);
Route::get('/insert', [InsertController::class, 'liste_insert']);
Route::get('/modProd-produit/{id}', [ProduitController::class, 'modProd_produit']);
Route::get('/facture/{id}', [VenteController::class, 'facture']);
Route::post('/modProd/traitement', [ProduitController::class, 'liste_modProd_traitement']);

Route::get('/modVente-vente/{id}', [VenteController::class, 'modVente_vente']);
Route::post('/modVente/traitement', [VenteController::class, 'liste_modVente_traitement']);

Route::get('/modCli-client/{id}', [MenuController::class, 'modCli_client']);
Route::post('/modCli/traitement', [MenuController::class, 'liste_modCli_traitement']);

Route::post('/ajout/traitement', [MenuController::class, 'liste_ajout_traitement']);
Route::post('/ajoutVent/traitement', [VenteController::class, 'liste_ajoutvent_traitement']);
Route::post('/insert/traitement', [ProduitController::class, 'liste_insert_traitement']);
Route::delete('/produit/{produit}', [ProduitController::class, 'supprimer'])->name('produit.delete');
Route::delete('/client/{client}', [MenuController::class, 'supprimer'])->name('client.delete');
Route::delete('/vente/{vente}', [VenteController::class, 'supprimer'])->name('vente.delete');
Route::post('/singin/traitement', [SinginCotroller::class, 'liste_singin_traitement']);



Route::get('/produit/search', [ProduitController::class, 'search'])->name('produit.search');



Route::get('menus', [MenuController::class, 'index'])->name('menu.index');
Route::get('menus/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('menus', [MenuController::class, 'store'])->name('menu.store');



