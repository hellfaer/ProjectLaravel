<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookAuthor;

class BookController extends Controller
{
    public function index() {
        $BookAuthors = BookAuthor::all();
        foreach ($BookAuthors as $BookAuthor) {
            dump($BookAuthor->the_author);
        }
        dd('end');
    }


}
