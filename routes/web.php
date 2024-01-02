<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlutterwaveController;
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

// The page that displays the payment form
Route::get('/', function () {
    return view('welcome');
});
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('paynow');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');