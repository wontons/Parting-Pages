<?php

namespace App\Http\Controllers;

use App\Book;

class BookController extends Controller
{
    public function show($id) {
        return Book::findOrFail($id);
    }
}
