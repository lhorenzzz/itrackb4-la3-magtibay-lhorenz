<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = [
            ['title' => 'Philosophy', 'author' => 'Joseph Bluffer', 'year' => '2020'],
            ['title' => 'Love of my Life', 'author' => 'Kate Bluffer', 'year' => '2019'],
            ['title' => 'King of kings', 'author' => 'Akira Bluffer', 'year' => '2021'],
            ['title' => 'Queens', 'author' => 'Wally Bayola', 'year' => '2027'],
            ['title' => 'Giant Slayer', 'author' => 'Francine Magalona', 'year' => '2026'],
        ];

        return view('books.index', ['books' => $books]);
    }
}
