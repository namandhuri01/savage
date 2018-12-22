<?php

namespace App;

use App\FacebookUser;
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
        'facebook_user_id', 'group_link',
    ];

    public function facebook_user()

    {

      return $this->belongTo(FacebookUser::class);
    }

    
}
