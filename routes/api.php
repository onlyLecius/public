<?php

use App\Http\Controllers\Panel\GameController;
use App\Services\SuitBankPaymentsServices;
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

Route::any('deposit/webhook', [SuitBankPaymentsServices::class, 'webhook']);
Route::get('deposit/validate/{hash}', [SuitBankPaymentsServices::class, 'validatePayment']);
Route::post('game/novamente', [GameController::class, 'api_novamente']);



