<?php

namespace App;

use App\Raum;
use Illuminate\Database\Eloquent\Model;

class Raum extends Model
{
	protected $fillable = ['name','raum_number', 'gebaude_id','image'];
	
    public function gebaude()
    {
    	return $this->belongsTo(Gebaude::class);
    }

    public function raum()
    {
    	return $this->hasOne(Raum::class);
    }
    public function buchungen()
    {
        return $this->hasMany(Buchung::class);
    }
}
