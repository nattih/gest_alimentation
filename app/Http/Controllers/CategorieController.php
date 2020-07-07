<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categorie;
class CategorieController extends Controller
{
    public function list(Categorie $categories){
        $categories=Categorie::get();
        return view('Appgestion', compact('categories'));

    }

    public function new(){
        return view('categorie.form');

    }

    public function store(Categorie $categorie){
            $data=request()->validate([
                'nom'=> ['required','string'],
                'photo'=> ['required','image']
              ]);
            $imagePath=request('photo')->store('uploads','public');
            $categorie=Categorie::create([

                  'nom'=>$data[ 'nom'],
                  'photo'=>$imagePath,
              ]);


              return redirect()->route('categorie');
        }

        public function details(string $categorie,int $id){
$categorie=Categorie::find($id);
$produits=$categorie->produits;

              return view('categorie.produit',compact('categorie', 'produits'));

           }
}

