<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/details',[DetailController::class,'details'])->name('details.trip');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/success',[CheckoutController::class,'success'])->name('success');

require __DIR__.'/auth.php';
Auth::routes(
    ['verifiy' => true]
);

