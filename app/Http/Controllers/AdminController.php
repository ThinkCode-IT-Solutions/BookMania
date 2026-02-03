<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function books()
    {
        $allBooks = Book::all();
        return view('admin.books.index', [
            'books' => $allBooks,
        ]);
    }

    public function postBooks(Request $request) {
        dd($request->all());
    }
    public function create()
    {
        return view('admin.books.create');
    }
    public function show()
    {
        return view('admin.books.show');
    }
}
