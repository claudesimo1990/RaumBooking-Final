<?php

namespace App;

use App\Profile;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    public function user()
    {
       return $this->belongsTo('App\User');
    }
}
