<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ProductController extends Controller
{
    public function index() {
        $books = Book::all();

        return view('products', compact('books'));
    }
}