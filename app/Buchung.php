<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buchung extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
