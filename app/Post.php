<?php

namespace App;


class Post extends Model
{


    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body,$user_id){
        return $this->comments()->create([
            'body' => $body,
            'user_id' =>$user_id
        ]);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
