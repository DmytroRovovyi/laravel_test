<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller {

     function index() {
         $articles = Article::all();
         return view('welcome', compact('articles'));
    }
}
