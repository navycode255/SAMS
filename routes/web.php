<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoanController;

use App\Http\Controllers\SaccosRegisterController;
use App\Models\Saccos;

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
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ************* Registration Process *************

Route::post('registration', [SaccosRegisterController::class, 'getSaccos'])->name('register');


//Loan Activity Routes
Route::post('/LoanRegistration',[LoanController::class, 'savetoLoan']) ->name('savetoLoan');
Route::get('/LoanSeach',[LoanController::class, 'SearchLoans']);

Route::post('forms',[SaccosRegisterController:: class ,'getSaccos']);

// Route::post('create-request',['SaccosRegisterController@getSaccos'])->name('create');

// Route::post('lading-page', [SaccosRegisterController::class, 'getSaccos'])->name('create');

