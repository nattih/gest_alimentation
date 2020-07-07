<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;
use App\Produit;
use App\Vente;
use App\User;

class VenteController extends Controller
{    private $auth;

    function __construct(AuthManager $auth){
$this->auth=$auth;
    }
    public function store(int $id){
        $produit=Produit::find($id);
       $data= request()->validate([
            'quantite' =>['integer','required']
        ]);
        $vendeur=$this->auth->user()->id;
        $somme=$produit['prix']*$data['quantite'];
        $stockActuel=$produit['stockA']-$data['quantite'];
        $vente=Vente::create([

            'quantite'=>$data[ 'quantite'],
            'produit_id'=>$produit->id,
            'somme'=>$somme,
            'user_id'=>$vendeur,
            'stockA'=>$stockActuel
        ]);

        $produit['stockA']=$stockActuel;
        $produit->save();
        // dd($vente);

        return redirect()->route('vente.list');
    }

    public function list(){

        $ventes=Vente::get();
return view('vente.list', compact('ventes'));
    }
}



