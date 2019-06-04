<?php

namespace App\Http\Controllers;
use App\Team;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {

        $teams = Team::all();
        return view('teams.index',compact('teams'));
    }

    public function show($team_id) {

        $team = Team::findOrFail($team_id);
        return view('teams.show',compact('team'));
    }
}
