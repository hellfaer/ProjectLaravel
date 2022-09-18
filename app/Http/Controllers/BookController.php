<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookAuthor;
use PhpParser\Node\Expr\PostDec;

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
        BookAuthor::create($data);
        return redirect()->route('post.index');
    }

    public function show(BookAuthor $post)
    {
        return view('BookAuthor.show', compact('post'));
    }

    public function edit(BookAuthor $post)
    {
        return view('BookAuthor.edit', compact('post'));
    }

    public function update(BookAuthor $post)
    {
        $data = request()->validate([
            'the_author' => 'string',
        ]);
        $post->update($data);
        return redirect()->route("post.show", $post->id);
    }

    public function destroy(BookAuthor $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

}
