<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CalendarRepository;

class CalendarController extends Controller
{
    public function index(CalendarRepository $calendarRepository)
    {
        $events = $calendarRepository->latest(10);
        return view('calendar.calendar')
            ->with("events", $events);
    }

    public function show($id, CalendarRepository $calendarRepository)
    {
        $event = $calendarRepository->read($id);

        return view('calendar.calendarSingle')
            ->with("event", $event);
    }
}
