<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-session-info', function (Request $request) {

    $data = $request->header();
    $sessionLifetime = Config::get('session.lifetime');


    // Recupera l'informazione della sessione
    $sessionExist = session('visita_effettuata', false);
    $token = session()->getId();

    // Restituisci l'informazione come risposta JSON
    return response()->json(compact('sessionExist','token','sessionLifetime'));
});

Route::get('/set-session', function (Request $request) {

    $data = $request->header();

    $sessionExist = $request->session()->exists('visita_effettuata');

    if (!$sessionExist) {
        // Imposta la sessione
        session(['visita_effettuata' => true]);

        $createSession = true;
    }else{
        $createSession = false;
    }
    $token = session()->getId();

    // Restituisci una risposta JSON
    return response()->json(compact('createSession','sessionExist','token'));
});
