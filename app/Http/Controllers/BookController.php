<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookAuthor;

class BookController extends Controller
{
    public function index()
    {
        $BookAuthors = BookAuthor::all();
        return view('BookAuthor.index', compact('BookAuthors'));
    }

    public function create()
    {
        return view('BookAuthor.create');
    }

    public function store()
    {
        $data = request()->validate([
            'the_author' => 'string',
        ]);
        dd($data);
        BookAuthor::create($data);
        return redirect()->route('post.index');
    }


}
