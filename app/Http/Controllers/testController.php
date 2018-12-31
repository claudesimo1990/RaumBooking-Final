<?php

namespace App\Http\Controllers;

use App\Notifications\TestNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\notify;
use Illuminate\Support\Facades\Mail;

class testController extends Controller
{
    public function sendemail(){
    	$user = User::find(1);

    	$user->notify(new TestNotification($user));
    }
}
