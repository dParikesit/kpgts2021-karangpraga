<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'kpgts2021_posts';

    public function author()
    {
        return $this->belongsTo('App\User', 'post_author');
    }
}
