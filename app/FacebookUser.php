<?php

namespace App;

use App\FacebookGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FacebookUser extends Model
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function facebook_group()
    {
        return $this->hasMany(FacebookGroup::class); 
    }
}
