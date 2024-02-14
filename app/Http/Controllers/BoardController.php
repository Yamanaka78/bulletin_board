<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index()
    {
        $boards = new Board();
        $boardsDates = $boards->getBoards();
        return view('board.index')->with('boardsDates', $boardsDates);
    }
}
