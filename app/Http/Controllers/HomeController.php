<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        return view('home', ['articles' => $articles]);
    }
}
