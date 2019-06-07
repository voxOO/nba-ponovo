<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store (Request $request) {

        $this->validate(request(), Comment::STORE_RULES);
        $comment = new Comment;

        
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = request('team_id');
        $comment->save();

        return redirect('teams.single_team');
    }
}
