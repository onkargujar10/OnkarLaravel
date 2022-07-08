<?php

namespace App;

use App\Comment;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function getComment()
    {
        return $this->hasMany('App\Comment');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories' ,'post_id','category_id');
    }
    public function tag()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
