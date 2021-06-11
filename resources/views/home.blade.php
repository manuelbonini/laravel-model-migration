<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacchetti Viaggio</title>
</head>
<body>
    
    <h1>Pacchetti Viaggio</h1>

    <ul>

        @foreach ($packages as $package)
            <li>
                <div>City: {{ $package->city }}</div>

                <div>Country: {{ $package->country }}</div>

                <div>Travel days: {{ $package->travel_days }}</div>

                <div>Price: {{ $package->price }}</div>
            </li>
        @endforeach

    </ul>

</body>
</html>