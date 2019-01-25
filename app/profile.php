<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = ['vorname','matrikelnummer','studiengang','semester','adresse','avatar'];


    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
