<?php

use Illuminate\Http\Request;

Route::resource( 'users', 'UserController' )->except([
  'create', 'edit'
]);

Route::resource( 'teams', 'TeamController' )->except([
  'create', 'edit'
]);

Route::get( 'team/{team}', 'TeamController@showMembers' );

Route::resource( 'projects', 'ProjectController' )->except([
  'create', 'edit'
]);

Route::post( 'project/addMember/{project}', 'ProjectController@addMember' );

Route::get( 'project/showMembers/{project}', 'ProjectController@showMembers' );
