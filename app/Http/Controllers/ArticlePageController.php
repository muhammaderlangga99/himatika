<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticlePageController extends Controller
{
    public function index()
    {
        // seacrching articles by title
        $artikel = Article::latest();
        if (request('artikel')) {
            $artikel->where('title', 'like', '%' . request('artikel') . '%');
        }

        return view('blog.index', [
            'page' => 'Blog',
            'articles' => $artikel->paginate(13)->withQueryString(),
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
