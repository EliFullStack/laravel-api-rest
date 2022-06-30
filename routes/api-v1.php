<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\RegisterController;
use App\Http\Controllers\Api\v1\PlayerController;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::get('/', function () {
    return "probando apirest"; 
});*/

Route::post('register', [RegisterController::class, 'store'])->name('api.v1.register');





Route::post('players', [PlayerController::class, 'store'])->name('api.v1.players.store');

Route::put('players/{player}', [PlayerController::class, 'update'])->name('api.v1.players.update');

Route::post('players/{player}/games', [PlayerController::class, 'throw'])->name('api.v1.players.throw');

Route::delete('players/{player}/games', [PlayerController::class, 'destroy'])->name('api.v1.players.destroy');

Route::get('players', [PlayerController::class, 'index'])->name('api.v1.players.index');

Route::get('players/{player}/games', [PlayerController::class, 'playerThrow'])->name('api.v1.players.playerThrow');

Route::get('players/ranking', [PlayerController::class, 'getRanking'])->name('api.v1.players.getRanking');

Route::get('/players/ranking/loser', [PlayerController::class, 'getWinner'])->name('api.v1.players.getWinner');

Route::get('/players/ranking/winner', [PlayerController::class, 'getLoser'])->name('api.v1.players.getLoser');


/*
POST /players : crea un jugador/a.
PUT /players/{id} : modifica el nom del jugador/a.
POST /players/{id}/games/ : un jugador/a específic realitza una tirada dels daus.
DELETE /players/{id}/games: elimina les tirades del jugador/a.
GET /players: retorna el llistat de tots els jugadors/es del sistema amb el seu percentatge mitjà d’èxits 
GET /players/{id}/games: retorna el llistat de jugades per un jugador/a.
GET /players/ranking: retorna el rànquing mitjà de tots els jugadors/es del sistema. És a dir, el percentatge mitjà d’èxits.
GET /players/ranking/loser: retorna el jugador/a amb pitjor percentatge d’èxit.
GET /players/ranking/winner: retorna el jugador/a amb millor percentatge d’èxit.
*/


