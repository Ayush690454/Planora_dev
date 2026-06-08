<?php

namespace App\Http\Controllers;

use App\Card;
use App\BoardList;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function store(Request $request, BoardList $list)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);

        Card::create([
            'board_list_id' => $list->id,
            'title' => $request->title,
            'description' => null,
            'position' => 0
        ]);

        return back();
    }
}