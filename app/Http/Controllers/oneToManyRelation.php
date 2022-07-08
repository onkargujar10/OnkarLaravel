<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class oneToManyRelation extends Controller
{
    public function inverseRelationship()
    {
        return Post::with('getComment', 'user')->get();
    }
}
