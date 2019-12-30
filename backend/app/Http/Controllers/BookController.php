<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index() {
        return Book::all()->sortByDesc("id");
    }

    public function store(Request $request) {

        //could make this into middleware
        $this->validate($request, [
            'title' => 'required|max:128',
            'author' => 'required|max:128',
            'publisher' => 'max:128|nullable',
            'isbn' => 'max:13|nullable',
            'price' => 'numeric'
        ]);

        $data = $request->all();
        return Book::create($data);
    }

    public function show($id) {
        return Book::findOrFail($id);
    }

    public function update($id) {
        $book = Book::findOrFail($id);
        
        $book->sold = true;
        $book->save();

        return response()->json("Book was purchased!");
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json("book removed successfully");
    }
}
