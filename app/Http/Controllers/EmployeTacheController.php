<?php

namespace App\Http\Controllers;

use App\Models\employe;
use App\Models\employe_tache;
use App\Models\tache;
use Illuminate\Http\Request;

class EmployeTacheController extends Controller
{
    //

    public function create(){

        $employes = employe::all() ; 
        $taches = tache::all() ; 

        return view('employe_tache.create')
        ->with('employes' , $employes) 
        ->with('taches' , $taches) ;

    }

    public function store (Request $data ){
        $employe_tache = new employe_tache() ; 


        $employe_tache->employe_id = $data->employe_id ;  
        $employe_tache->tache_id = $data->tache_id ;  
        $employe_tache->dateDebut = $data->dateDebut ;  
        $employe_tache->dateFin = $data->dateFin ;  
        $employe_tache->realisation = $data->realisation ; 
        
        $employe_tache->save() ;

        return 'employe_tache rah tzad ' ; 

    }


    public function  tableEmpTache(){

        $employes = employe::with('taches')->get() ; 

        return view('employe_tache.table' )->with('employes' , $employes) ; 
    }

    public function employeSansTaches(){


        //  $employeSansTache = employe::doesntHave('taches')->get() ;


        $employeSansTache = [] ;

        $employes = employe::with('taches')->get() ;
        foreach ($employes as $employe) {

            if (count($employe->taches) === 0 ) {

                $employeSansTache[] = $employe ;
 
            }
           
        }

        return view("employe_tache.employeSansTache") 
        ->with('employes' , $employeSansTache )
        ;
    }

    
}
