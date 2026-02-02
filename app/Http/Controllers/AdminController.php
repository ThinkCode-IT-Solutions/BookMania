<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function books()
    {
        return view('admin.books.index');
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
