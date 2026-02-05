<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Prompts\Concerns\Scrolling;

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

    public function postBooks(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            "book_name" => 'required|string',
            "book_description" => ["required","string"],
            "book_author" => 'required|string',
            "book_pages" => 'required|string',
            "book_price" => 'required|string',
            "category" => 'required|string',
            "status" => 'required',
        ]);

        $slug = Str::slug($request->book_name,"-");
        $status = $request->status === "Active" ? true : false;


        // TODO: image upload handling

        // Create a new book record
        Book::create([
            "name" => $request->book_name,
            "slug" => $slug,
            "description" => $request->book_description,
            "price" => $request->book_price,
            "aurthor_name" => $request->book_author,
            "pages" => $request->book_pages,
            "is_active" => $status,
        ]);




        // Redirect to the books list with a success message
        return redirect()->route('dashboard.books')->with("success","Book created successfully!");
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
