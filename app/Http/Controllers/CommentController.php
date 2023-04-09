<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    public function Create(Request $request)
    {
        $request->validate([
            'body'     =>'required',
            'stars'    =>'required',
            ]);

            $comment = new comment();
            $comment->name = $request->input('body');
            $comment->email = $request->input('stars');
        
            
            $comment->save();

            return redirect()->route('comments')->with('success', 'comment created successfully');
    }

    public function Edit(Request $request, $comment_id)
    {
        $request->validate([
            'body'     =>'required',
            'stars'    =>'required',
            ]);

            $comment = new comment();
            $comment->name = $request->input('body');
            $comment->email = $request->input('stars');
        
            
            $comment->save();

            return redirect()->route('comments')->with('success', 'comment created successfully');
    }

    public function Delete($comment_id)
    {
        comment::destroy($comment_id);

        return redirect()->route('comments')->with('success', 'comment deleted successfully');
    }
}
