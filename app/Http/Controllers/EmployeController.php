<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    //
    public function index(){

        $employes = employe::all() ;

        return view('employe.index' )->with('employes' , $employes) ;   
    }
    public function create(){

        return view('employe.create') ; 

    }
    public function store(Request $data){

       $employe = new employe() ; 

       $employe->nom = $data->nom ;
       $employe->prenom = $data->prenom ;
       $employe->sexe = $data->sexe ;
       $employe->salaire = $data->salaire ;
       $employe->save() ;

       return redirect('/index');
    }

    public function destroy( $id ){
        $employe = employe::findOrfail($id) ;
        $employe->delete() ; 

       return redirect('/index');
    }
    public function edit( $id ){
        $employe = employe::findOrfail($id) ;
        

       return view("employe.edit")->with('employe' , $employe );
    }
    public function update(Request $data){

        $employe = employe::findOrfail($data->id);
        
        $employe->nom = $data->nom ;
        $employe->prenom = $data->prenom ;
        $employe->sexe = $data->sexe ;
        $employe->salaire = $data->salaire ;
 
        $employe->update();

        return redirect('/index');
    }

    public function afficheTaches($id){

        $employe = employe::with('taches')->find($id); 

        return view("employe_tache/listTaches")
 
        ->with("employe" , $employe)
         ;

    }
}
