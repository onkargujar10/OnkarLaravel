<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class manyToManyRelation extends Controller
{
    public function mtmRelation()
    {
        return Post::find(1)->categories;
    }
}
