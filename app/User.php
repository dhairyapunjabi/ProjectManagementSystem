<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
      'name',
      'designation',
      'email',
      'date_of_birth',
      'gender',
      'contact_number',
      'password',
      'team_id'
    ];

    public function team()
    {
      return $this->belongsTo( 'App\Team' );
    }

    public function projects()
    {
      return $this->belongsToMany( 'App\Project' );
    }
}
