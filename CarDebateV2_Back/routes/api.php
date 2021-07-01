<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VersionController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CarburantController;
use App\Http\Controllers\CarousserieController;
use App\Http\Controllers\TransmissionController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ModeleController;
use App\Http\Controllers\ImgAnnonceController;
use App\Http\Controllers\ImgVController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\CommantaireController;
use App\Http\Controllers\PaysController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/annonces/getAll', [AnnonceController::class, 'getAll']);
Route::apiResource('annonces', AnnonceController::class);

Route::get('/carburants/getAll', [CarburantController::class, 'getAll']);
Route::apiResource('carburants', CarburantController::class);;

Route::get('/carousseries/getAll', [CarousserieController::class, 'getAll']);
Route::apiResource('carousseries', CarousserieController::class);

Route::get('/transmissions/getAll', [TransmissionController::class, 'getAll']);
Route::apiResource('transmissions', TransmissionController::class);

Route::get('/commantaires/getAll', [CommantaireController::class, 'getAll']);
Route::apiResource('commantaires', CommantaireController::class);

Route::get('/marques/getAll', [MarqueController::class, 'getAll']);
Route::apiResource('marques', MarqueController::class);


Route::get('/modeles/getByMarque/{id}', [ModeleController::class, 'getByMarque']);
Route::get('/modeles/getAll', [ModeleController::class, 'getAll']);
Route::apiResource('modeles', ModeleController::class);

Route::get('/pays/getAll', [PaysController::class, 'getAll']);
Route::apiResource('pays', PaysController::class);


Route::post('/utilisateurs/login', [UtilisateurController::class, 'login']);
Route::get('/utilisateurs/getAll', [UtilisateurController::class, 'getAll']);
Route::apiResource('utilisateurs', UtilisateurController::class);

Route::get('/versions/getByModel/{id}', [VersionController::class, 'getByModel']);
Route::get('/versions/getAll', [VersionController::class, 'getAll']);
Route::apiResource('versions', VersionController::class);

Route::get('/imgAnnonces/getAll', [ImgAnnonceController::class, 'getAll']);
Route::apiResource('imgAnnonces', ImgAnnonceController::class);


Route::get('/imgVs/getAll', [ImgVController::class, 'getAll']);
Route::apiResource('imgVs', ImgVController::class);
