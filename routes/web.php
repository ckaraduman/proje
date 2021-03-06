<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/book_list', [PageController::class, 'list'])->name('list');
Route::get('/tablo', [PageController::class, 'data']);
Route::get('/insert', [PageController::class, 'insert'])->name('insert');
Route::get('/update/{id}', [PageController::class, 'update'])->name('update');
Route::get('/delete/{id}', [PageController::class, 'delete'])->name('delete');
Route::post('/DataUpdate/{id}', [PageController::class, 'DataUpdate'])->name('DataUpdate');
Route::post('/DataInsert', [PageController::class, 'DataInsert'])->name('DataInsert');
?>
