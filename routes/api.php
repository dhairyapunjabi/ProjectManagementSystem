<?php

use Illuminate\Http\Request;

Route::resource( 'users', 'UserController' )->except([
  'create', 'edit'
]);
