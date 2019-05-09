<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public $primaryKey = 'postId';

    public $timestamps = false;
}
