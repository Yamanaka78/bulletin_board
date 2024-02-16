<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Comment\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    protected $comment;

    public function __construct()
    {
        $this->comment = new Comment();
    }
    public function store(CommentRequest $request)
    {
        $this->comment->commentPost($request);
        return redirect()->route('board.index');
    }

    public function destroy($id){
        $this->comment->commentDestroy($id);
        return redirect()->route('board.index');
    }
}
