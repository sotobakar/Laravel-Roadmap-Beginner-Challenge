<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with(['category:id,name', 'user:id,name'])->paginate(10);
        debugbar()->info(Tag::take(5)->pluck('id')->all());
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $tags = explode(',', $request->tags);

        if ($request->has('image')) {
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('images/articles', $filename, 'public');
        }

        $article = auth()->user()->articles()->create([
            'title' => $request->title,
            'image' => $filename ?? null,
            'content' => $request->content,
            'category_id' => $request->category_id
        ]);

        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $article->tags()->attach($tag);
        }

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::get();
        $article->load(['category:id', 'user:id']);
        $tags = $article->tags->implode('name', ',');
        debugbar()->info($tags);
        return view('articles.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $tags = explode(',', $request->tags);

        if ($request->has('image')) {
            Storage::delete('public/images/articles/' . $article->image);

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('images/articles', $filename, 'public');
        }

        $article->update([
            'title' => $request->title,
            'image' => $filename ?? $article->image,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);

        $newTags = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            array_push($newTags, $tag->id);
        }
        $article->tags()->sync($newTags);

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete('images/articles/' . $article->image);
        }

        $article->tags()->detach();
        $article->delete();

        return redirect()->route('articles.index');
    }
}
