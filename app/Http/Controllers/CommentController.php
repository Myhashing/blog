<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post){
        $this->validate(request(),[
            'body'=>'required|min:2'
        ]);

        //dd(auth()->user()->id);
        $post->addComment(request('body'),auth()->user()->id);

        return back();
    }
}
