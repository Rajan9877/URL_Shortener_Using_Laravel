<?php

use App\Http\Controllers\UrlShortenerController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [UrlShortenerController::class, 'index'])->name('home');
// Route::get('/shortened_url', [UrlShortenerController::class, 'showShortenedUrl'])->name('shortened_url');
Route::get('/error', [UrlShortenerController::class, 'showError'])->name('error');
Route::get('/r/{shortCode}', [UrlShortenerController::class, 'redirect'])->name('redirect');
Route::post('shorten', [UrlShortenerController::class, 'shorten'])->name('shorten');

Route::get('/stats/{shortCode}', [UrlShortenerController::class, 'showStats'])->name('stats');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/submit-form', [UrlShortenerController::class, 'submitForm'])->name('submitForm');

