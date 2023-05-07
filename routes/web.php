<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomepageController;

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
    return redirect('/account/login');
});

Route::get('/account/login', [LoginController::class, 'loginPage']);
Route::post('/account/login/send-request', [LoginController::class, 'handleLogin']);
Route::get('/home/index', [HomepageController::class, 'getTerritories']);
Route::get('/home/index/get-territories', [HomepageController::class, 'requestTerritories']);