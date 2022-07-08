<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Photo;
use App\Post;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;

class manyToManyPolymorphic extends Controller
{
    public function manyToManyPost()
    {
        $data = Post::find(1)->tag;
        dd($data);
    }
    public function manyToManyComment()
    {
        $data = Comment::find(1)->tag;
        dd($data);
    }
    public function manyToManyVideo()
    {
        $data = Video::find(1)->tag;
        dd($data);
    }
    public function manyToManyPhoto()
    {
        $data = Photo::find(1)->tag;
        dd($data);
    }
    public function manyToManyTag()
    {
        $data = Tag::find(1)->post;
        dd($data);
    }

}
