<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'description'=>'required',
        ]);
        $comment = new Comment();
        $comment->description = $request->description;
        $comment->yard_id = $request->yard_id;
        $comment['user_id'] = \Auth::user()->id;

        $comment->save();
        // dd($comment);

        return back();
    }

    public function blog(Request $request)
    {
        $request->validate([
            'description'=>'required',
        ]);
        $comment_blog = new Comment();
        $comment_blog->description = $request->description;
        $comment_blog->blog_id = $request->blog_id;
        $comment_blog['user_id'] = \Auth::user()->id;

        $comment_blog->save();
        // dd($comment);

        return back();
    }
}
