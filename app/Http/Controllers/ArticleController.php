<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http\Requests;
use App\Article;
use App\Http\Resources\Article as ArticleResource;

;



class ArticleController extends Controller
{
    public function index()
    {
        $articles  = Article::all(20);

        return ArticleResource::collection($articles);
    }


    public function store(Request $request)
    {
        // dd($request->isMethod('patch'));
        $article = $request->isMethod('patch') ? Article::findOrFail($request->article_id) : new Article;

        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->id = $request->input('article_id');

        
        if($article->save()){

            return new ArticleResource($article);
        }

    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return new ArticleResource($article);
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if($article->delete()){
            return new ArticleResource($article);
        }

        return new ArticleResource($article);
    }
}
