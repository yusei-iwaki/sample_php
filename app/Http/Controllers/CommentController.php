<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $user = $request->user();
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->post_id = $post->id;
        $comment->text = $request->text;
        $comment->save();
        return redirect(route('posts.show', $post));
    }
}