<?php

namespace App\Http\Controllers;

use App\Board;
use App\BoardList;
use Illuminate\Http\Request;

class BoardListController extends Controller
{
    public function store(Request $request, Board $board)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);

        BoardList::create([
            'board_id' => $board->id,
            'name' => $request->name,
            'position' => 0
        ]);

        return back();
    }
}