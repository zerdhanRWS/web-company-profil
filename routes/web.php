<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Mostblog2Controller;
use App\Http\Controllers\Mostblog3Controller;
use App\Http\Controllers\MostblogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TeamController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/', [HomeController ::class, 'index']);

Route::get('/home', [HomeController ::class, 'index']);
Route::get('/gallery', [GalleryController ::class, 'index']);
Route::get('/profil', [ProfilController ::class, 'index']);
Route::get('/team', [TeamController ::class, 'index']);
Route::get('/contact', [ContactController ::class, 'index']);
Route::get('/portfolio', [PortfolioController ::class, 'index']);
Route::get('/blog', [BlogController ::class, 'index']);
Route::get('/mostblog', [MostblogController ::class, 'index']);
Route::get('/mostblog2', [Mostblog2Controller ::class, 'index']);
Route::get('/mostblog3', [Mostblog3Controller ::class, 'index']);


// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/mostblog', function () {
//     return view('mostblog');
// });

// Route::get('/mostblog2', function () {
//     return view('mostblog2');
// });

// Route::get('/mostblog3', function () {
//     return view('mostblog3');
// });

// Route::get('/portfolio', function () {
//     return view('portfolio');
// });

// Route::get('/profil', function () {
//     return view('profil');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/team', function () {
//     return view('team');
// });


