<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pasākumi: </h1>

    <ul>
            <li><strong>Nosaukums: {{$event1->title}}</strong></li>
            <li><strong>Datums: {{$event1->year}}</strong></li>
            <li><strong>Dalībnieku skaits: {{$event1->attendeeCount}}</strong></li>
        </ul>
        <ul>
            <li><strong>Nosaukums: {{$event2->title}}</strong></li>
            <li><strong>Datums: {{$event2->year}}</strong></li>
            <li><strong>Dalībnieku skaits: {{$event2->attendeeCount}}</strong></li>
        </ul>
</body>
</html>