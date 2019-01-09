<?php

namespace App;

use App\Raum;
use Illuminate\Database\Eloquent\Model;

class Raum extends Model
{
    public function gebaude()
    {
    	return $this->belongsTo(Gebaude::class);
    }

    public function raum()
    {
    	return $this->hasOne(Raum::class);
    }
}
