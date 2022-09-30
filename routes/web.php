<?php

use Illuminate\Routing\RouteGroup;
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

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/terms', function () {
    return view('frontend.terms');
});
Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});

Route::get('/dashboard', function () {
    return view('dashboard/account');
})->middleware(['auth'])->name('dashboard');

Route::get('/request-loan', function () {
    return view('dashboard/request_loan');
});

Route::get('/local-transfer', function () {
    return view('dashboard/local_transfer');
});

Route::get('/foreign-transfer', function () {
    return view('dashboard/foreign_transfer');
});

Route::get('/fixed-deposit', function () {
    return view('dashboard/fixed_deposit');
});

Route::get('/transaction-history', function () {
    return view('dashboard/transaction_history');
});

Route::get('/profile', function () {
    return view('dashboard/profile');
});


require __DIR__.'/auth.php';
