<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(Request $request){
        $request->validate([
            'q' => 'nullable|string|max:255',
            'categories' => 'nullable|array|min:0',
            'categories.*' => 'nullable|integer|min:1',
            'sort' => 'nullable|string|in:new-to-old,old-to-new,low-to-high,high-to-low',
            'page' => 'nullable|integer|min:1',
            'perPage' => 'nullable|integer|in:15,30,60,120',
        ]);


        $q = $request->q ?: null;
        $f_categories = $request->has('categories') ? $request->categories : [];
        $f_sort = $request->has('sort') ? $request->sort : null;
        $f_page = $request->has('page') ? $request->page : 1;
        $f_perPage = $request->has('perPage') ? $request->perPage : 15;

        $books = Book::when($q, function ($query, $q) {
            return $query->where(function ($query) use ($q) {
                $query->orWhere('name_tm', 'like', '%' . $q . '%');
            });
        })

            ->when($f_categories, function ($query, $f_categories) {
                $query->whereIn('category_id', $f_categories);
            })

            ->when(isset($f_sort), function ($query) use ($f_sort) {
                if ($f_sort == 'old-to-new') {
                    $query->orderBy('id');
                } elseif ($f_sort == 'high-to-low') {
                    $query->orderBy('price', 'desc');
                } elseif ($f_sort == 'low-to-high') {
                    $query->orderBy('price');
                } else {
                    $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                $query->orderBy('id', 'desc');
            })
            ->paginate($f_perPage, ['*'], 'page', $f_page)
            ->withQueryString();

        $categories = Category::orderBy('name')
            ->get();

        return view('book.index')
            ->with([
                'q' => $q,
                'books' => $books,
                'categories' => $categories,
                'f_categories' => $f_categories,
                'f_sort' => $f_sort,
                'f_perPage' => $f_perPage,
            ]);
    }




}
