<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/books",[BookController::class , "index"])->name("books.index");
Route::get("/books/{book}",[BookController::class , "bookDetailPage"])->name("books.detail");
