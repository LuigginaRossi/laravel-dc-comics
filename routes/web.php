<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});


// READ- legge tutti gli elementi della mia tabella
Route::get("/comics", [ComicController::class, "index"])->name("comics.index");


//CREATE- attraverso un form chiediamo informazioni per creare una nuova istanza/elemento della mia tabella Comics
Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");


//SHOW- mostra una singola istanza/elemento, passo valore dinamico: id
Route::get("/comics/{comic}", [ComicController::class, "show"])->name('comics.show');


//STORE- salva i dati inseriti tramite comics.create nel mio db
Route::post("/comics", [ComicController::class, "store"])->name("comics.store");


//EDIT - Aggiorno i dati di una risorsa/istanza con un form 
Route::post("/comics/{comic}/edit", [ComicController::class, "edit"])->name("comics.edit"); 


//UPDATE- ricevo dati del from edit e aggiorno DB
Route::put("/comics/{comic}", [ComicController::class, "update"])->name("comics.update");


//DELETE- cancello dati
Route::delete("/comics/{comic}",[ComicController::class, "destroy"])->name("comics.destroy");