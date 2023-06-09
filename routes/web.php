<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::post('kirim-email', [KontakController::class, 'kirimemail']);
Route::get('code', function () {
    return view('comingsoon');
});
Route::get('readverse', function () {
    return view('comingsoon');
});
Route::get('kas', function () {
    return view('comingsoon');
});
Route::get('scnd', function () {
    return view('comingsoon');
});
Route::get('kansa', function () {
    return view('comingsoon');
});


