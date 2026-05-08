<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event
{
    public string $title;
    public string $year;
    public int $attendeeCount;

    public function __construct(string $title, string $year, int $attendeeCount)
    {
        $this->title = $title;
        $this->year = $year;
        $this->attendeeCount = $attendeeCount;
    }

    public function showAttendeeCount()
    {
        return $this->attendeeCount;
    }

    public function addAttendee($count)
    {
        $this->attendeeCount += $count;
    }

    public function getInfo()
    {
        echo "Nosaukums: " . $this->title . "\n" .
        "; Datums: " . $this->year . "\n" .
        "; Dalībnieku skaits: " . $this->attendeeCount . "\n";
    }
}

$event1 = new Event("Vasaras Koncerts", "2024-08-15", 0);
$event2 = new Event("Rīgas maratons", "2025-04-20", 1500);

$event1->getInfo();
$event1->addAttendee(10);
$event2->getInfo();
