<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    //

    public function employes(){
        return $this->belongsToMany(employe::class , "employe_taches")
        ->withPivot('dateDebut' , 'dateFin' , 'realisation') 
        ->withTimestamps() ;  
    }
}
