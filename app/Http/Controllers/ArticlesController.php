<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Session;

class ArticlesController extends Controller
{
    public function index()
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $articles = Article::all();
        return view('article', compact('articles'));
    }

    public function goToDetail($id)
    {
        if (!Session::has('customer')) {
            return redirect()->route('login');
        }
        $article = Article::findOrFail($id);

        return view('articleDetail', compact('article'));
    }
}
