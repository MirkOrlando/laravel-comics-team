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
    return view('homepage');
})->name('homepage');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $comics = config('db.comics');
    //dd($comics);
    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    //dd($comics);
    if ($id >= 0 && is_numeric($id) && $id < count($comics)) {
        //dd($comics[$id]);
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comics.show');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
