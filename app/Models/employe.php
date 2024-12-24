<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    //

    public function taches(){
        return $this->belongsToMany(tache::class , "employe_taches"  )
        ->withPivot('dateDebut' , 'dateFin' , 'realisation') 
        ->withTimestamps() ; 
        
        ;
    }
}
