<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Product;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index () {


        $allBooks = Book::all();
        // dd($allBooks);
        return view("site.books",[
            "books" => $allBooks,
        ]);
    }

    public function bookDetailPage (Book $kitab) {
        // dd($kitab->images);

        // $kitab = Book::where("slug","=" , $book)->first();
        return view("site.book-detail",compact("kitab"));
    }


    public function products ( ){
        $allProducts = Product::all();
        return view("site.products", compact("allProducts"));
    }
}
