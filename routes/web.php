<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaccosRegisterController;

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

// Route::get('/', function () {
//     return view('landing-page');
// });

Route::get('landing-page', function() {
    return view('landing-page');
});

Route::post('forms',[SaccosRegisterController:: class ,'getSaccos']);

// Route::post('create-request',['SaccosRegisterController@getSaccos'])->name('create');

// Route::post('lading-page', [SaccosRegisterController::class, 'getSaccos'])->name('create');