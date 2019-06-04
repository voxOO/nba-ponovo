<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    public function showplayer ($id) {
        
        $player = Player::findOrFail($id);

        return view('players.showplayer', compact('player') );
    }
}
