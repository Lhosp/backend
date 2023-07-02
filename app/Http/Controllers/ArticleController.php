<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $validated = $request->validated();
        $article = Article::create($validated);
        return response()->json($article);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article = Article::find($article->id);
        return response()->json($article);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {

        $article = Article::find($article->id);
        return response()->json($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $validated = $request->validated();
        $article = Article::find($article->id);
        $article->update($validated);
        return response()->json($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article = Article::find($article->id);
        $article->delete();
        return response()->json($article);
    }
}
