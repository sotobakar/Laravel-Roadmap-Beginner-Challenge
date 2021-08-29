<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $tags = Tag::take(5)->pluck('id')->all();
        $articles = Article::factory()->count(10)->for($user)->create();

        foreach ($articles as $article) {
            $article->tags()->sync($tags);
        }
    }
}
