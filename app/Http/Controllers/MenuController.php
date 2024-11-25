<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Produit;

class MenuController extends Controller
{
    public function liste_menu()

    {
        $clients = Client::all();
        $produits = Produit::all();
       
        return view('menu.menu', compact('clients' , 'produits') );
    }




    public function supprimer($id)
    {
        $clients = Client::find($id);
        $clients->delete();
        return redirect()->back()->with('status', 'Le client a été supprimé avec succès.');
    }

    public function liste_ajout_traitement(Request $request)
    {
        $request->validate([
            'Nom_client' => 'required',
            'Prenom_client' => 'required',
            'Adress' => 'required',
            'Telephone' => 'required',
        ]);

        $client = new Client();
        $client->Nom_client = $request->Nom_client;
        $client->Prenom_client = $request->Prenom_client;
        $client->Adress = $request->Adress;
        $client->Telephone = $request->Telephone;
        $client->save();

        return redirect('/ajout')->with('status', 'Le client a bien été ajouté avec succès.');
    }

    public function modCli_client($id){
        $clients = Client::find($id);
      return view('modiffication.modCli',compact('clients'));
    }
    public function liste_modCli_traitement(Request $request){
        $request->validate([
            'Nom_client' => 'required',
            'Prenom_client' => 'required',
            'Adress' => 'required',
            'Telephone' => 'required',
        ]);
        $client = Client::find($request ->id);
        $client->Nom_client = $request->Nom_client;
        $client->Prenom_client = $request->Prenom_client;
        $client->Adress = $request->Adress;
        $client->Telephone = $request->Telephone;
        $client->update();
        return redirect('/menu')->with('status', 'Le client a bien été modifié avec succès.');
}

public function search (Request  $request)
{
    $keyword = $request -> input('keyword');
    $produits = Produit::where('Nom_client','LIKE',"%$keyword%")
    ->get();
    return view('client.liste',compact('produits'));
}



}


