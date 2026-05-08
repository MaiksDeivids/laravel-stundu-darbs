<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasākumi</title>
</head>
<body>

    <h1>Pasākumu saraksts</h1>

    @foreach($events as $event)

        <h2>{{ $event->title }}</h2>

        <ul>
            <li><strong>Datums:</strong> {{ $event->year }}</li>
            <li><strong>Dalībnieku skaits:</strong> {{ $event->attendeeCount }}</li>
        </ul>

    @endforeach

</body>
</html>