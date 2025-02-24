<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    function submitComment(Request $request) {

        $request->validate([
            'comment' => 'required | string',
        ]);

        $comment = new Comments();
        $comment -> hotel_id = $request -> hotel_id;
        $comment -> user_id = $request ->  user_id;
        $comment -> comment = $request -> comment;
        $comment-> save();

        session::flash('success','comment successfully');
        return redirect() -> back();
    }

}
