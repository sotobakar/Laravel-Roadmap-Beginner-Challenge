<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image', 'content', 'user_id', 'category_id'];

    /**.
     * Get the category associated with the article
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the tags associated with the article
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the user associated with the article
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the article's date.
     *
     * @return string
     */
    public function getDateAttribute()
    {
        return $this->created_at->toFormattedDateString();
    }
}
