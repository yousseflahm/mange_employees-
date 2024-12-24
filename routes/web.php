<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\EmployeTacheController;
use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index' , [EmployeController::class , 'index']) ;

Route::get('/create' , [EmployeController::class , 'create']) ;

Route::post('/insert' , [EmployeController::class , 'store']) ; 

Route::get('/supprime/{id}' , [EmployeController::class , 'destroy']) ; 


Route::get('/modifier/{id}' , [EmployeController::class , 'edit']) ; 

Route::post('/update' , [EmployeController::class , 'update']) ; 



//    ajoute des tache 


Route::get('/createEmT ' , [EmployeTacheController::class , 'create']) ; 


Route::post('/ajoute_employe_tache ' , [EmployeTacheController::class , 'store']) ; 


//  affiches les taches de chaque employe





Route::get('/taches/{id}' , [EmployeController::class , 'afficheTaches']) ; 


// table employes taches 


Route::get('/tableEmpTache' , [EmployeTacheController::class , 'tableEmpTache']) ; 



Route::get('/employe_0_tache' , [EmployeTacheController::class , 'employeSansTaches']) ; 



//  tache 

Route::get("/createTache" , [TacheController::class , 'create']) ; 


Route::post("/insertTache" , [TacheController::class , 'store']) ; 



Route::get("/tableTache" , [TacheController::class , 'index']) ; 

Route::get("/supprimeTache/{id}" , [TacheController::class , 'destroy']) ; 


Route::get("/modifierTache/{id}" , [TacheController::class , 'edit']) ; 


Route::post("/updateTache" , [TacheController::class , 'update']) ; 
