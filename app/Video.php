<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function tagss()
    {
        return $this->morphToMany('App\tagCheck', 'taggable');
    }
}
