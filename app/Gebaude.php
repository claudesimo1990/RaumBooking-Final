<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gebaude extends Model
{
    public function raume()
    {
    	return $this->hasMany(Raum::class)->take(4);
    }
}
