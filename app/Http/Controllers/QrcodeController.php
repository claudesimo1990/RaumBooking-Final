<?php

namespace App\Http\Controllers;

use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    public function qrcode()
    {
    	QrCode::mail('simo1990@gmail.com','salut la famille','comment vous aller.');
    }
}
