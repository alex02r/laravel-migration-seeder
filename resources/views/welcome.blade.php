<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header class="bg-dark text-white p-3">
        <h1>Treni</h1>
    </header>
    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Compagnia</th>
                                <th>Stazione di partenza</th>
                                <th>Stazione di arrivo</th>
                                <th>Orario di partenza</th>
                                <th>Orario di arrivo</th>
                                <th>Codice treno</th>
                                <th>Numero di Carrozze</th>
                                <th>In orario</th>
                                <th>Cancellato</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                <tr>
                                    <td>{{ $train['company'] }}</td>
                                    <td>{{ $train['start_station'] }}</td>
                                    <td>{{ $train['destination'] }}</td>
                                    <td>{{ $train['start_time'] }}</td>
                                    <td>{{ $train['end_time'] }}</td>
                                    <td>{{ $train['code'] }}</td>
                                    <td>{{ $train['carriages'] }}</td>
                                    <td>{{ !$train['late'] ? 'si' : ''}}</td>
                                    <td>{{ $train['deleted'] ? 'si' : ''}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

</body>

</html>