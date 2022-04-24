<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
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

    public function edit(Request $request,$id) {
        $data = DB::table('comments')->find($id); 
        return view('edit',compact('data')); 
    }

    public function update(Request $request, $id)
        {
        $data = Comment::find($id);
        $data->description = $request->description;
        $data->save();
    }
    
    public function delete_cmt(Request $request, $param) {
        Comment::where('id',$param)->delete();

        return back();
    }

}
