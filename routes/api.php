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

Route::get('/set-session', function (Request $request) {

    $sessionExist = $request->session()->exists('visita_effettuata');

    if (!$sessionExist) {
        // Imposta la sessione
        session(['visita_effettuata' => true]);

        $createSession = true;
    }else{
        $createSession = false;
    }
    $token = session()->getId();

    $response = response()->json(compact('createSession', 'sessionExist', 'token'));

    // Restituisci una risposta JSON
    return $response;
});


