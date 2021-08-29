<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homepage()
    {
        $articles = Article::with('category:id,name')->take(7)->get();
        debugbar()->info($articles[0]->title);
        return view('website.homepage', compact('articles'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function article(Article $article)
    {
        $article->load(['category:id,name', 'user:id,name', 'tags:id,name']);
        return view('website.article', compact('article'));
    }
}
