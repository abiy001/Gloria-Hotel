<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    function submitComment(Request $request, $userID, $hotelID) {

        $request->validate([
            'comment' => 'required | string',
        ]);

        $comment = new Comments();
        $comment -> hotel_id = $hotelID;
        $comment -> user_id =  $userID;
        $comment -> comment = $request -> comment;
        $comment-> save();

        session::flash('success','comment successfully');
        return redirect() -> route('home');
    }

}
