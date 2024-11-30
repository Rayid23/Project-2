@extends('layouts.auth')

@section('title', 'Логин')

@section('content')

    <style>
        .btn:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn:active {
            background-color: #004085;
            border-color: #002752;
        }

        .btn i {
            font-size: 1.25rem;
        }

        .login-wrap {
            width: 100%;
            max-width: 500px;
        }
    </style>

    <div class="row justify-content-center" style="width: 1200px; height: 591px;">

        <div class="col-md-6 col-lg-5">

            <div class="login-wrap p-3 p-md-6">

                <div class="icon d-flex align-items-center justify-content-center mb-4">
                    <span class="{{$classes['User-Icon']}}"></span>
                </div>

                <h3 class="text-center mb-4">Welcome Back!</h3>

                <form action="{{route('register')}}" class="login-form" method="post">

                    @csrf

                    <div class="text-center">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="{{$classes['Input-Class']}}" style="{{$style['Input-Style']}}"
                               placeholder="Имя" name="name">
                    </div>

                    <div class="text-center">
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" class="{{$classes['Input-Class']}}" style="{{$style['Input-Style']}}"
                               placeholder="Введите почту" name="email">
                    </div>

                    <div class="text-center">
                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group d-flex">
                        <input type="password" style="{{$style['Input-Style']}}" class="{{$classes['Input-Class']}}"
                               placeholder="Введите пароль" name="password" id="password">
                    </div>

                    <div class="text-center">
                        @error('c_password') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group d-flex">
                        <input type="password" style="{{$style['Input-Style']}}" class="{{$classes['Input-Class']}}"
                               placeholder="Подвердите пароль" name="c_password" id="c_password">
                    </div>


                    <div class="form-group">
                        <button type="submit"
                                class="{{$classes['Regis-Class']}}">
                            Регистрация
                        </button>
                    </div>

                    <div class="form-group">
                        <button type="button" onclick="location.href='{{route('login')}}'"
                                class="{{$classes['Button-Class']}}">
                            Логин
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
