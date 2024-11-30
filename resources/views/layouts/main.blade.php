<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Подключение CSS Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Подключение jQuery (необходим для работы Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Подключение Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('sidebar-01/css/style.css')}}">


</head>
<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="p-4 pt-5">

            <a href="#" class="img logo rounded-circle mb-5"
               style="background-image: url({{asset('sidebar-01/images/logo.jpg')}});"></a>

            <ul class="list-unstyled components mb-5">
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">[<i class="bi bi-pencil-square icon-link"></i>] Текстовый панель</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Поговорим</a>
                        </li>
                        <li>
                            <a href="#">Вскрытие</a>
                        </li>
                        <li>
                            <a href="#">Интересные скрины</a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">[<i class="bi bi-airplane-engines icon-link"></i>] Хобби</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Психология</a>
                        </li>
                        <li>
                            <a href="#">Все о спорте</a>
                        </li>
                        <li>
                            <a href="#">Все о космосе</a>
                        </li>
                        <li>
                            <a href="#">Вокруг света</a>
                        </li>
                        <li>
                            <a href="#">Автомобилисть</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#table-menu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">[<i class="bi bi-table icon-link"></i>] Таблицы</a>
                    <ul class="collapse list-unstyled" id="table-menu">
                        <li>
                            <a href="{{route('users.index')}}">[<i class="bi bi-people-fill"></i>] Пользователи</a>
                        </li>
                        <li>
                            <a href="{{route('roles.index')}}">[<i class="bi bi-mask icon-link"></i>] Роли</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#card-menu" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">[<i class="bi bi-suit-club icon-link"></i>] Карты</a>
                    <ul class="collapse list-unstyled" id="card-menu">
                        <li>
                            <a href="{{route('card_1')}}">[<i class="bi bi-box-fill icon-link"></i>] Карта - 1</a>
                        </li>
                        <li>
                            <a href="{{route('card_2')}}">[<i class="bi bi-box-fill icon-link"></i>] Карта - 2</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="{{route('logout')}}">Выйти</a>
                </li>
                <li class="mt-2">
                    <livewire:current-time />
                </li>
            </ul>

            <div class="footer">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>

        </div>
    </nav>

    @yield('content')

</div>


<script src="{{ asset('sidebar-01/js/jquery.min.js') }}"></script>
<script src="{{ asset('sidebar-01/js/popper.js') }}"></script>
<script src="{{ asset('sidebar-01/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('sidebar-01/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
