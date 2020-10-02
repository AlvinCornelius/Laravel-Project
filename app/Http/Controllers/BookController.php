<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    protected function CreateBook(Request $request)
    {
        $book = new Book;
        $book->book_name = $request->Name;
        $book->book_year = $request->Year;
        $book->book_category = $request->Category;
        $book->save();
        return redirect('/');
    }
    protected function CreateView()
    {
        return view('create');
    }
    public function ReadBook(Request $request)
    {
        $reads = Book::All();
        return view('index',compact('reads'));
    }
    public function ReadUser(Request $request)
    {
        $reads = User::All();
        return view('profile',compact('reads'));
    }
    
}
