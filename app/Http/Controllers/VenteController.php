<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ahat;
use Carbon\Carbon;
use  Illuminate\Support\Facades\DB;// Ajoutez cette ligne pour importer la classe Carbon

class VenteController extends Controller
{
    public function liste_vente()
    {
        // $achats = Achats::all();
        $achats = DB::select('select * from ahats');


        return view('vente.vente' , compact('achats'));
    }
    public function supprimer(ahat $achat)
    {
        $achat->delete();
        return redirect()->back()->with('status', 'Le vente a bien été supprimé avec succès.');
    }

    public function liste_ajoutvent_traitement(Request $request)
    {
        $request->validate([
            'idcli' => 'required',
            'idprod' => 'required',
            'Date_validation' => 'required',
            'Montant_Total' => 'required',
        ]);

        // $date_validation = Carbon::createFromFormat('d/m/Y', $request->Date_validation)->format('Y-m-d');

        $ahat = new ahat();
        $ahat->idcli = $request->idcli;
        $ahat->idprod = $request->idprod;
        $ahat->Date_validation = $request->Date_validation; // Utilisez la date formatée
        $ahat->Montant_Total = $request->Montant_Total;
        $ahat->save();

            return redirect('/ajoutVent')->with('status', 'Le vente a bien été supprimé avec succès.');
        }
        public function modVente_vente($id){
            $achats = ahat::find($id);
            return view('modiffication.modVente',compact('achats'));
        }

        public function liste_modVente_traitement(Request $request){
            $request->validate([
                'idcli' => 'required',
                'idprod' => 'required',
                'Date_validation' => 'required',
                'Montant_Total' => 'required',
            ]);

            $achat = new Achat();
            $achat->idcli = $request->idcli;
            $achat->idprod = $request->idprod;
            $achat->Date_validation = $date_validation; // Utilisez la date formatée
            $achat->Montant_Total = $request->Montant_Total;
            $achat->update();

            return redirect('/ajoutVent')->with('status', 'Le vente a bien été supprimé avec succès.');
        }

        public function facture($id) {
            $achas = DB::table('facture')
                    ->where('facture.id',$id)
                    ->get();
            return view('client.listeClient',compact('achas'));
        }


}
