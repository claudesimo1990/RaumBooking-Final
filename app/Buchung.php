<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Buchung extends Model
{
	protected $fillable = ['gebaude_id','user_id','raum_id','von','qrcode','bis','kommentar'];



    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
