<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>List of Trains</h1>
    <ul>
        @foreach ($trains as $train)
        <li>
            Company: {{ $train->company }}<br>
            Departure Station: {{ $train->departure_station }}<br>
            Time of Departure: {{ $train->time_of_departure }}<br>
            Arrival Station: {{ $train->arrival_station }}<br>
            Time of Arrival: {{ $train->time_of_arrival }}<br>
            Train Number: {{ $train->train_number }}<br>
            Number of Carriages: {{ $train->n_carriages }}<br>
            Delay: {{ $train->delay == 1 ? 'Yes' : 'No' }}<br>
            Cancelled: {{ $train->cancelled == 1 ? 'Yes' : 'No' }}<br>
        </li>
        @endforeach
    </ul>
</body>

</html>