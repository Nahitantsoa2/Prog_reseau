<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function liste_produit()
    {
        $produits = Produit::all();
        return view('produit.liste', compact('produits'));
    }

    public function supprimer(Produit $produit)
    {
        $produit->delete();
        return redirect()->back()->with('status', 'Le produit a été supprimé avec succès.');
    }

    public function liste_insert_traitement(Request $request)
    {
        $request->validate([
            'Nom_produit' => 'required',
            'Prix_Unitaire' => 'required',
            'Stock_Disponible' => 'required',
        ]);

        $produit = new Produit();
        $produit->Nom_produit = $request->Nom_produit;
        $produit->Prix_Unitaire = $request->Prix_Unitaire;
        $produit->Stock_Disponible = $request->Stock_Disponible;
        $produit->save();

        return redirect('/insert')->with('status', 'Le produit a été ajouté avec succès.');
    }
    public function modProd_produit($id){
        $produits = Produit::find($id);
      return view('modiffication.modProd',compact('produits'));
    }
    public function liste_modProd_traitement(Request $request){
        $request->validate([
            'Nom_produit' => 'required',
            'Prix_Unitaire' => 'required',
            'Stock_Disponible' => 'required',
        ]);

        $produit = Produit::find($request ->id);
        $produit->Nom_produit = $request->Nom_produit;
        $produit->Prix_Unitaire = $request->Prix_Unitaire;
        $produit->Stock_Disponible = $request->Stock_Disponible;
        $produit->update();
        return redirect('/produit')->with('status', 'Le produit a bien été modifié avec succès.');


    }
    public function search (Request  $request)
    {
        $keyword = $request -> input('keyword');
        $produits = Produit::where('Nom_produit','LIKE',"%$keyword%")
        ->get();
        return view('produit.liste',compact('produits'));
    }

    


}



