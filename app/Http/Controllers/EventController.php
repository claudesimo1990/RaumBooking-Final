<?php
namespace App\Http\Controllers;
use App\Buchung;
use App\Event;
use Composer\Autoload\Request;
use Illuminate\Http\Request as resq;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
class EventController extends Controller
{
       public function index()
            {
                $events = [];
                $data = Buchung::all();
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $events[] = Calendar::event(
                            $value->raum_number,
                            true,
                            new \DateTime($value->von),
                            new \DateTime($value->bis.' +1 day'),
                            null,
                            // Add color and link on event
                         [
                             'color' => $value->color,
                             'url' => 'pass here url and any route',
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('users/Buchung/event', compact('calendar'));
            }
            public function eventRaum(resq $request)
            {
                $events = [];

                $data = Buchung::where('raum_number',$request->raum_number);
                if($data->count() > 0) {
                    foreach ($data as $key => $value) {
                        $events[] = Calendar::event(
                            $value->raum_number,
                            true,
                            new \DateTime($value->von),
                            new \DateTime($value->bis.' +1 day'),
                            null,
                            // Add color and link on event
                         [
                             'color' => $value->color,
                             'url' => 'pass here url and any route',
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('admin/raum/events', compact('calendar'));
            }
}