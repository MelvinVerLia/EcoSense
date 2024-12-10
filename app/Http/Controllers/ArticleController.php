<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Display a listing of the articles.
    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    // Show the form for creating a new article.
    public function create()
    {
        return view('admin.articles.create');
    }

    // Store a newly created article in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles', 'public');
        }
        $article->save();

        return redirect()->route('articles.index');
    }

    // Show the form for editing the specified article.
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    // Update the specified article in storage.
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);
$article->title = $request->title;
        $article->content = $request->content;
        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles', 'public');
        }
        $article->save();

        return redirect()->route('articles.index');
    }

    // Remove the specified article from storage.
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}