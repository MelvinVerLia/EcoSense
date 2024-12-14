<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article', compact('articles'));
    }

    public function goToDetail($id)
    {
        $article = Article::findOrFail($id);

        return view('articleDetail', compact('article'));
    }
}
