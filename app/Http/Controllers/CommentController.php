<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Session;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {

        $request->validate([
            'description'=>'required',
        ]);
        $comment = new Comment();
        $comment->description = $request->description;
        if($request->yard_id){
            $comment->yard_id = $request->yard_id;
        }
        else{
            $comment->blog_id = $request->blog_id;
        }
        if(\Auth::user()){
            $comment->user_id = \Auth::user()->id;
        }
        else{
            return redirect()->route('login');
        }

        $comment->save();
        // dd($comment);

        return back();
    }


}
