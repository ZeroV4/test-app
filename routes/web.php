<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticleController;

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

Route::get('/p1', function () {
    return view('pag1');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/test', [
    TestController::class, 'test'
]);


Route::get('/articles', [
    ArticleController::class, 'article'
]);

Route::get('/articles/article/{id}', [
    ArticleController::class, 'show'
]);