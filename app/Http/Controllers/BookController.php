<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; 

class BookController extends Controller
{
    public function index()
    {
        $books = Book::All();
        foreach ($books as &$book) {
            $book->category;
            $book->user;
        }
        return $books;
    }
 
    public function show($id)
    {
        $book =  Book::find($id);
        $book->category = $book->category;
        $book->user = $book->user;
        return $book;
    }

    public function store(Request $request)
    {
        return Book::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        return $book;
    }

    public function delete(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return 204;
    }
}
