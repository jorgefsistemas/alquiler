<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IndexController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "wpeb" middleware group. Make something great!
|
*/


Route::group(['prefix'=> 'admin'],function(){

Route::get('Panel-Administrativo', [IndexController::class, 'index'])->name('dashboard');
// Route::get('dashboard', [IndexController::class, 'index'])->name('dashboard');

});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/mesas', function () {
    return view('alquiler.mesas.index');
    // return view('jorge');
})->name('mesas');

Route::get('/form', function () {
    return view('form');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
