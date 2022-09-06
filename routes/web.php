<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\LoanController;
=======
use App\Http\Controllers\SaccosRegisterController;
>>>>>>> 1c42236db13b9c4e9f3eeace64c83dbdf8d1a2b4

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

<<<<<<< HEAD

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::post('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Loan Activity Routes
Route::post('/LoanRegistration',[LoanController::class, 'savetoLoan']) ->name('savetoLoan');
Route::get('/LoanSeach',[LoanController::class, 'SearchLoans']);
=======
Route::post('forms',[SaccosRegisterController:: class ,'getSaccos']);

// Route::post('create-request',['SaccosRegisterController@getSaccos'])->name('create');

// Route::post('lading-page', [SaccosRegisterController::class, 'getSaccos'])->name('create');
>>>>>>> 1c42236db13b9c4e9f3eeace64c83dbdf8d1a2b4
