<?php

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
    return view('welcome');
});

Route::get('/solutions', [App\Http\Controllers\HomeController::class, 'solutions'])->name('solutions');

Route::get('/pages/{slug}', [App\Http\Controllers\HomeController::class, 'pages'])->name('pages');

Route::get('/features', function () {
    return view('features');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/legal/license-agreement-enterprise', function () {
    return view('footer_page.1');
})->name('footer_page_1');

Route::get('/legal/license-agreement-saas', function () {
    return view('footer_page.2');
})->name('footer_page_2');

Route::get('/cookie-list', function () {
    return view('footer_page.3');
})->name('footer_page_3');

Route::get('/privacy-policy', function () {
    return view('footer_page.4');
})->name('footer_page_4');

Route::group(['prefix' => 'formsubmit', 'middleware' => 'throttle:10,3'], function () {
    Route::post('/', [App\Http\Controllers\FormController::class, 'formSubmit'])->name('formSubmit');
});

Route::get('search', [App\Http\Controllers\FormController::class, 'search'])->name('search');

Auth::routes([ 'confirm' => false, 'forgot' => false, 'login' => true, 'register' => false, 'reset' => false, 'verification' => false, ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});