<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/app.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>

<nav>
    <a @class(['current' => request()->is('live')]) href="{{route('Live')}}">Live</a>
    <a @class(['current' => request()->is('time')]) href="{{route('time')}}">Time</a>
    <a @class(['current' => request()->is('plus-button')]) href="{{route('plus-button')}}">Plus-Buttons</a>
    <a @class(['current' => request()->is('show-table')]) href="{{route('show-table')}}">Show-Table</a>
    <a @class(['current' => request()->is('create-table')]) href="{{route('create-table')}}">Create-Table</a>
</nav>

<div class="container">
    <div class="row mt-4 text-center">
        {{ $slot }}
    </div>
</div>
@livewireScripts

</body>
</html>
