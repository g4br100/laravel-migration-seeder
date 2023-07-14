<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Trains</h1>
    <ul>

    </ul>

    <table class="table">
        @foreach ($trains as $train)
        <thead class="thead-light">
            <tr>
                <th scope="col"></th>
                <th scope="col">Agency</th>
                <th scope="col">departure_station</th>
                <th scope="col">arrival_station</th>
                <th scope="col">departure_time</th>
                <th scope="col">arrival_time</th>
                <th scope="col">number_of_carriages</th>
                <th scope="col">in_time</th>
                <th scope="col">deleted</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $train->id }}</th>
                <td>
                    {{ $train->agency }}
                </td>
                <td>
                    {{ $train->departure_station }}
                </td>
                <td>
                    {{ $train->arrival_station }}
                </td>
                <td>
                    {{ $train->departure_time }}
                </td>
                <td>
                    {{ $train->arrival_time }}
                </td>
                <td>
                    {{ $train->number_of_carriages }}
                </td>
                <td>
                    {{ $train->in_time }}
                </td>
                <td>
                    {{ $train->deleted }}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

</body>

</html>