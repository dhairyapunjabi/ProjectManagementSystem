<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
      'name',
      'designation',
      'email_id',
      'date_of_birth',
      'gender',
      'contact_number'
      'password',
      'team_id'
    ];

    public function team()
    {
      return this->belongsTo( 'App\Team' );
    }
}
