<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded=[];
    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }

    public function ventes(){

        return $this->hasMany('App\Vente');
    }

}

