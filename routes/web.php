<?php

use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/monitoring', function () {
        return view('monitoring');
    });

    Route::get('/article', function () {
        return view('article');
    });
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/riwayatMonitoring', function () {
        return view('riwayatmonitoring');
    });
    Route::get('/monitor-pohon', function () {
        return view('monitor-pohon');
    });
});

require __DIR__ . '/auth.php';
