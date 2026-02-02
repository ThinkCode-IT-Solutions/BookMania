<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("site.home");
})->name("home");

Route::get("/about", function () {
    return view("site.about");
})->name("about");
Route::get("/contact", function () {
    return view("site.contact");
})->name("contact");

Route::get("/books", [BookController::class, "index"])->name("books.index");
Route::get("/books/{kitab:slug}", [BookController::class, "bookDetailPage"])->name("books.detail");
Route::get("/products", [BookController::class,"products"])->name("products.index");
Route::get('/dashboard', [AdminController::class,"dashboard"])->middleware(['auth', 'verified'])->name('dashboard');
Route::get("/dashboard/books", [AdminController::class,"books"])->middleware(['auth', 'verified'])->name('dashboard.books');
Route::get("/dashboard/books/create", [AdminController::class,"create"])->middleware(['auth', 'verified'])->name('dashboard.books.create');
Route::get("/dashboard/books/{book}/show", [AdminController::class,"show"])->middleware(['auth', 'verified'])->name('dashboard.books.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
