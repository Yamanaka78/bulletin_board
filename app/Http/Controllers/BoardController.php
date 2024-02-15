<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Http\Requests\Board\PostRequest;
use App\Http\Requests\Board\UpdateRequest;

class BoardController extends Controller
{
    protected $board;

    public function __construct()
    {
        $this->board = new Board();

    }
    public function index()
    {
        $boardsDates = $this->board->getBoards();
        return view('board.index',compact('boardsDates'));
    }

    public function store(PostRequest $request)
    {
        $this->board->InsertPost($request);
        return redirect('/Board');
    }

    public function edit($id){
        $dates = Board::find($id);
        return view('board.edit', compact('dates'));
    }
    public function update(Request $request, $id)
    {
        $boardDate = Board::find($id);
        $this->board->updateBoard($request, $boardDate);
        return redirect()->route('board.index');
    }

    public function destroy($id)
    {
        $this->board->destroyBoard($id);
        return redirect()->route('board.index');
    }

}
