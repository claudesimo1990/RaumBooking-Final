<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raum extends Model
{
    public function gebaude()
    {
    	return $this->belongsTo(Gebaude::class);
    }
}
