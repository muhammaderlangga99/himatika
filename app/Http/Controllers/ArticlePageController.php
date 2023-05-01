<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticlePageController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'page' => 'Blog',
            'articles' => Article::latest()->paginate(13),
            'categories' => Category::all(),
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.read', [
            'page' => $article->title,
            'articles' => $article,
        ]);
    }
}
