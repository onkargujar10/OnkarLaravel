<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function video()
    {
        return $this->morphedByMany('App\Video', 'taggable');
    }
    public function photo()
    {
        return $this->morphedByMany('App\Photos', 'taggable');
    } 
    public function post()
    {
        return $this->morphedByMany('App\Post', 'taggable');
    } 
    public function comment()
    {
        return $this->morphedByMany('App\Comment', 'taggable');
    } 

}
