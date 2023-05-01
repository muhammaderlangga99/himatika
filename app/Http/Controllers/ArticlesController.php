<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Contracts\DataTable;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $articles = Article::where('user_id', auth()->id())->get();
            return DataTables::of($articles)
                ->make();
        }

        return view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create', [
            'category' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|image',
            'title' => 'required | unique:articles,title',
            'content' => 'required | min:10',
            'category' => 'required',
        ]);

        Article::create([
            'user_id' => auth()->id(),
            'slug' => Str::slug($request->title),
            'thumbnail' => $request->file('thumbnail')->store('thumbnail'),
            'category_id' => $request->category,
            'title' => Str::title($request->title),
            'body' => $request->content,
        ]);
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
            'category' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'thumbnail' => 'image',
            'title' => 'required | unique:articles,title,' . $article->id,
            'content' => 'required | min:10',
            'category' => 'required',
        ]);

        $thumbnail = '';

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('thumbnail');
        } else {
            $thumbnail = $article->thumbnail;
        }


        Article::where('id', $article->id)->update([
            'slug' => Str::slug($request->title),
            'thumbnail' => $thumbnail,
            'category_id' => $request->category,
            'title' => Str::title($request->title),
            'body' => $request->content,
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus');
    }
}
