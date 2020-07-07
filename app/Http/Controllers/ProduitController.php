<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Categorie;
class ProduitController extends Controller
{
    public function list(Produit $produits){
        $produits=Produit::get();
        return view('produit.list', compact('produits'));
        
    }

    public function new(){
        $categories=Categorie::all();
        return view('produit.form',compact('categories'));

    }

    public function store(Produit $produit){
        
            $data=request()->validate([
                'titre'=> ['required','string'],
                'description'=> ['required','string'],
                'prix'=> ['required','integer'],
                'stockI'=> ['required','integer'],
                'categorie_id'=> ['required','integer'],
                'photo'=> ['required','image']
              ]);
    
              $imagePath=request('photo')->store('uploads','public');
              $produit=Produit::create([
                  'titre'=>$data[ 'titre'],
                  'description'=>$data[ 'description'],
                  'prix'=>$data[ 'prix'],
                  'stockI'=>$data[ 'stockI'],
                  'stockA'=>$data[ 'stockI'],
                  'categorie_id'=>$data[ 'categorie_id'],
                  'photo'=>$imagePath,
              ]);
              return redirect()->route('produit');
    }
    public function modifier(int $id){
            $produit=Produit::find($id);
            $categories=Categorie::all();
            return view('produit.modifier',compact('categories','produit'));
    }

    public function update(int $id){
            $produit=Produit::find($id);
            $categorie=$produit->categorie->nom;
            $data=request()->validate([
                'titre'=> ['required','string'],
                'description'=> ['required','string'],
                'prix'=> ['required','integer'],
                'stockI'=> ['required','integer'],
                'categorie_id'=> ['required','integer'],
                'photo'=> ['image']
              ]);
              if(request('photo')){
                $imagePath=request('photo')->store('uploads','public');
                $produit->update(array_merge($data,['photo'=>$imagePath]));
              }
              else{
                
                  $produit->update($data);
              }
              $id=$produit->categorie->id;
              return redirect()->route('categorie.details',compact('id','categorie'));
                
    }
    public function ajouter(int $id){
            $categorie=Categorie::find($id);
        return view('produit.ajouter',compact('categorie'));
    }
    public function add(int $id){

            $data=request()->validate([
                'titre'=> ['required','string'],
                'description'=> ['required','string'],
                'prix'=> ['required','integer'],
                'stockI'=> ['required','integer'],
                'categorie_id'=> ['required','integer'],
                'photo'=> ['required','image']
              ]);
    
              $imagePath=request('photo')->store('uploads','public');
              $produit=Produit::create([
                  'titre'=>$data[ 'titre'],
                  'description'=>$data[ 'description'],
                  'prix'=>$data[ 'prix'],
                  'stockI'=>$data[ 'stockI'],
                  'stockA'=>$data[ 'stockI'],
                  'categorie_id'=>$data['categorie_id'],
                  'photo'=>$imagePath,
              ]);

              $categorie=Categorie::find($id);
              $nom_categorie=$categorie->nom;
              
              return redirect()->route('categorie.details',['id'=>$id,'categorie'=>$nom_categorie]);

    }

     public function supprimer(int $id){
        $produit=Produit::find($id);
        $nom_categorie=$produit->categorie->nom;
        $id=$produit->categorie->id;
        $produit->delete();
        return redirect()->route('categorie.details',['id'=>$id,'categorie'=>$nom_categorie]);
    }



    public function details(string $produit, int $id){
    $produit=Produit::find($id);
    return view('produit.details',compact('produit'));
    }

}
