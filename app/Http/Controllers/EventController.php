<?php
namespace App\Http\Controllers;
use App\Buchung;
use App\Event;
use Illuminate\Http\Request;
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
}