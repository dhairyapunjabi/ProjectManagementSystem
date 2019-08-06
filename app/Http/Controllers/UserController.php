<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('basicAuth');
    }

    public function index()
    {
      $users = User::all();
      return $users;
    }

    public function store(Request $request)
    {
      $user = new User([
        'name' => $request->name,
        'designation' => $request->designation,
        'email_id' => $request->email_id,
        'date_of_birth' => $request->date_of_birth,
        'gender' => $request->gender,
        'contact_number' => $request->contact_number
      ]);
      $user->save();
    }

    public function show(User $user)
    {
      return $user;
    }

    public function update(Request $request, User $user)
    {
      $user->name = $request->name;
      $user->designation = $request->designation;
      $user->email_id = $request->email_id;
      $user->date_of_birth = $request->date_of_birth;
      $user->gender = $request->gender;
      $user->gender = $request->contact_number;
      $user->save();
    }

    public function destroy(User $user)
    {
      $user->delete();
    }
}
