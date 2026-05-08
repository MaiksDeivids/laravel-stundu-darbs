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
}