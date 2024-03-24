<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Panel\DashController;
use App\Http\Controllers\Panel\DepositController;
use App\Http\Controllers\Panel\GameController;

Route::get('/sync', function () {
    return response()->json('error, 200');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('/', [SiteController::class, 'index'])->name('index');

Route::group([
    'prefix'      => 'auth',
    'as'          => 'auth.'
], function () {
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('lost-password', [AuthController::class, 'lostPassword'])->name('lost_password');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('register', [AuthController::class, 'doRegister'])->name('do.register');
    Route::post('login', [AuthController::class, 'doLogin'])->name('do.login');
    Route::post('lost-password', [AuthController::class, 'doLostPassword'])->name('do.lost_password');
});

Route::group(['prefix'      => 'indicate', 'as' => 'indicate.'
], function () {
    Route::get('{indicator}', [AuthController::class, 'register'])->name('register');
});

Route::group([
    'prefix' => 'panel',
    'as'     => 'panel.',
    'middleware' => Authenticate::class
], function () {
    Route::get('/', function () {
        return redirect()->route('panel.game');
    });
    Route::get('game', [DashController::class, 'game'])->name('game');
    Route::post('game', [DashController::class, 'startGame'])->name('start.game');
    Route::get('', [DashController::class, 'indicate'])->name('indicate');
    Route::get('withdraw', [DashController::class, 'withdraw'])->name('withdraw');
    Route::get('withdraw/indicate', [DashController::class, 'withdrawIndicate'])->name('withdraw_indicate');
    Route::post('withdraw/indicate', [DashController::class, 'doWithdrawAfiliate'])->name('withdraw_indicate.create');
    Route::post('withdraw', [DashController::class, 'doWithdraw'])->name('do.withdraw');
    Route::resource('deposit', DepositController::class);

    Route::get('game/info', [GameController::class, 'info'])->name('game.info');
    Route::post('game/win', [GameController::class, 'win'])->name('game.win');
    Route::post('game/lost', [GameController::class, 'lost'])->name('game.lost');
    // Route::post('game/restart', [GameController::class, 'restart'])->name('game.restart');
});
