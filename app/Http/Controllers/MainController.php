<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class MainController extends Controller
{
    public function index(){
        $categories = Category::withCount('books')
            ->orderBy('books_count', 'desc')
            ->take(8)
            ->get();

        $categoryBooks = [];
        foreach ($categories as $category) {
            $categoryBooks[] = [
                'category' => $category,
                'books' => Book::where('category_id', $category->id)
                    ->with('category')
                    ->take(4)
                    ->get(),
            ];
        }

        return view('home.index')
            ->with([
                'categoryBooks' => $categoryBooks,
            ]);
    }

    public function details($id){
        $book = Book::find($id);
        return view('book.details',['book' => $book]);
    }

    public function login(){
        return view('auth.login');
    }

    public function locale($locale)
    {
        if ($locale == 'en') {
            session()->put('locale', 'en');
            return redirect()->back();
        } elseif ($locale == 'tm') {
            session()->put('locale', 'tm');
            return redirect()->back();
        }
            elseif ($locale == 'ru') {
            session()->put('locale', 'ru');
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

}