<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;


    protected $table="friend";



    function post_list()
    {
        return $this->belongsToMany(Post::class,"post_friend","friend_id","post_id");
    }
}
