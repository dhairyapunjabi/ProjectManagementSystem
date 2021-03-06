<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function __construct()
  {
    $this->middleware('basicAuth');
  }

  public function index()
  {
    $projects = Project::all();
    return $projects;
  }

  public function store(Request $request)
  {
    $project = new Project([
      'name' => $request->name,
      'status' => $request->status
    ]);
    $project->save();
  }

  public function show(Project $project)
  {
    return $project;
  }

  public function update(Request $request, Project $project)
  {
    $project->title = $request->name;
    $project->status = $request->status;
    $project->save();
  }

  public function destroy(Project $project)
  {
    $project->delete();
  }

  public function addMember(Request $request, Project $project)
  {
    $member=User::find( $request->id );
    $project->users()->attach($member);
  }

  public function showMembers(Project $project)
  {
    return $project->users;
  }
}
