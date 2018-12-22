<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FacebookGroup extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facebook_user_id', 'grouplink',
    ];

    public function facebookuser()

    {

      return $this->belongTo(FacebookUser::class);
    }

    
}
