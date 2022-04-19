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
}
