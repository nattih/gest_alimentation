<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vente extends Model
{
    protected $guarded=[];
    public function produit(){
        return $this->belongsTo('App\Produit');
    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}

