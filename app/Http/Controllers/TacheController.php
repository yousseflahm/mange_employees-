<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    //


    public function index(){
        $taches = tache::all() ; 

        return view("tache.index" , compact('taches'));
    }
    public function create(){
        return view("tache.create") ; 
    }
    public function store(Request $data){
        $tache = new tache() ; 
        $tache->lib = $data->lib ;
        $tache->dateEcheance = $data->dateEcheance ;
        $tache->save() ;
         return redirect('/tableTache') ; 
    }
    public function destroy($id){
        $tache = tache::find($id) ; 
        $tache->delete() ;
         return redirect('/tableTache') ; 
    }
    public function edit($id){
        $tache = tache::find($id) ; 
       
         return view("tache.edit" , compact("tache")) ; 
    }

    public function update(Request $data){

        $tache= tache::find($data->id) ;
        $tache->lib = $data->lib ;
        $tache->dateEcheance = $data->dateEcheance ;
        $tache->update() ;

        return  redirect('/tableTache') ;

    }


}
