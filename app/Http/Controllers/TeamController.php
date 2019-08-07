<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
  public function __construct()
  {
    $this->middleware('basicAuth');
  }

  public function index()
  {
    $teams = Team::all();
    return $teams;
  }

  public function store(Request $request)
  {
    $team = new Team([
      'title' => $request->title,
    ]);
    $team->save();
  }

  public function show(Team $team)
  {
    return $team;
  }

  public function update(Request $request, Team $team)
  {
    $team->title = $request->title;
    $team->save();
  }

  public function destroy(Team $team)
  {
    $team->delete();
  }
}
