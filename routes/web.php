<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("books.index");
});



Route::get("/books",[BookController::class , "index"])->name("books.index");
Route::get("/books/{kitab:slug}",[BookController::class , "bookDetailPage"])->name("books.detail");
