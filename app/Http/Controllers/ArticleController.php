<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{

    //** special function */
    public function sayHello()
    {
        return 'Hello';      
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Query builder ---> table
        // Object Rerational Mapping  --> Model
        $articles = Article::all(); 
        // dd($articles);
        // return view('articles.index', []);
        return view('dashboard.articles.index')->with('articles', $articles);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // $article = Article::findOrFail($article->id);
        // dd($article->content);
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
