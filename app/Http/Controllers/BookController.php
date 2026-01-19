<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index () {


        $allBooks = Book::all();
        // dd($allBooks);
        return view("books",[
            "books" => $allBooks,
        ]);
    }

    public function bookDetailPage (Book $kitab) {
        // dd($book);

        // $kitab = Book::where("slug","=" , $book)->first();
        return view("book-detail",compact("kitab"));
    }
}
