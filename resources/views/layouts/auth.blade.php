<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('login-styles/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .backr {
            background: url('https://img.freepik.com/free-vector/geometric-gradient-futuristic-background_23-2149116406.jpg') no-repeat center center;
            background-size: cover;
            height: 150vh;
            padding: 12vh;

        }

    </style>

</head>
<body>
<section class="backr">
    <div class="container">
        @yield('content')
    </div>
</section>

<script src="{{asset('login-styles/js/jquery.min.js')}}"></script>
<script src="{{ asset('login-styles/js/popper.js') }}"></script>
<script src="{{ asset('login-styles/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('login-styles/js/main.js') }}"></script>

</body>
</html>

