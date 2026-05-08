<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function show()
    {
        $event1 = new Event("Vasaras Koncerts", "2024-08-15", 10);
        $event2 = new Event("Rīgas Maratons", "2025-04-20", 1500);
        return view('events.show', ['event1' => $event1, 'event2' => $event2]);
    }

    public function index()
    {
        $events = [
            new Event("Vasaras Koncerts", "2024-08-15", 250),
            new Event("Rīgas Maratons", "2025-04-20", 1500),
            new Event("Ziemassvētku Gadatirgus", "2024-12-10", 800)
        ];

        return view('events.index', [
            'events' => $events
        ]);
    }
}