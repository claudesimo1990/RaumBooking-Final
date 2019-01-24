<?php

namespace App;

use App\Raum;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Buchung extends Model
{
	protected $fillable = ['gebaude_id','user_id','raum_number','von','qrcode','bis','kommentar','color'];



    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function raum()
    {
    	return $this->hasOne(Raum::class);
    }
}
