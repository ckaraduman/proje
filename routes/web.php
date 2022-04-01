<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("main");
});

Route::get('/book_list', [PageController::class, 'list'])->name('list');

// Route::any('test', function () {
//     return view('test');
// });
Route::get('/tablo', [PageController::class, 'data']);

Route::get('/deneme', [PageController::class, 'index']);

Route::get('/show/{ad}', [PageController::class, 'show']);

// Route::match(['get', 'post'],'/insert','App\Http\Controllers\PageController@insert')->name('insert');

Route::get('/insert', [PageController::class, 'insert'])->name('insert');
Route::get('/update', [PageController::class, 'update'])->name('update');

// Route::match(['get', 'post'],'/test','App\Http\Controllers\PageController@test')->name('test');
//
// Route::get('/cem', [PageController::class, 'insert']);

Route::post('/DataInsert', [PageController::class, 'DataInsert'])->name('DataInsert');
