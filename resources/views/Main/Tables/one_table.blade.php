@extends('layouts.main')

@section('title', 'Первая таблица')

@section('content')

    <div class="container">


        <div class="row mt-2">
            <h2 class="text-center">Пользователи</h2>
            <hr style="hreight: 5px; background-color: #000000">
        </div>

        <div class="col-12 text-center">
            <!-- Кнопка для открытия модального окна с формой создания нового пользователя -->
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create
            </button>

            <!-- Внутренности модального окна -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Добавь пользователя</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="{{route('users.store')}}" method="POST">

                                @csrf

                                <div class="mb-2">
                                    <input class="form-control" name="name" type="text" placeholder="Name">
                                </div>

                                <div class="mb-2">
                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                </div>

                                <select class="select2" name="roles[]" multiple="multiple" style="width: 100%">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="btn  btn-outline-warning">Reset</a>
            <a href="#" class="btn  btn-outline-danger">Delete-All</a>

        </div>

        <div class="row mt-4">
            <div class="col-10 offset-1">
                <table class="table table-striped  table-bordered table-dark" style="width: 100%">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ROLES</th>
                        <th scope="col">OPTIONS</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $user)

                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>
                                @php
                                    $itsAdmin = false;
                                @endphp
                                @foreach ($user->roles as $role)
                                    <span class="btn btn-sm btn-{{$role->color}}">
                                        @if($role->name == 'Admin')
                                            @php($itsAdmin = true)
                                        @else
                                            @php($itsAdmin = false)
                                        @endif
                                        {{ $role->name }}
                                    </span>
                                @endforeach
                                @if(!$itsAdmin)
                                    <!-- Албтерантивный способ добавление ролей, Модальный окна для выберание ролей -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#AddRoleModal{{$user->id}}">
                                        +
                                    </button>

                                    <!-- Тело Модаля -->
                                    <div class="modal fade" id="AddRoleModal{{$user->id}}" tabindex="-1"
                                         aria-labelledby="AddRoleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="AddRoleModalLabel">Add Role -> {{$user->id}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('users.add-role', $user->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <select class="select2" name="roles[]" multiple="multiple"
                                                                style="width: 100%">
                                                            @foreach($roles as $role)
                                                                <option
                                                                    @if($user->roles->contains($role))
                                                                        selected
                                                                    @endif
                                                                    value="{{$role->id}}">{{$role->name}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Update
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <form action="{{route('users.destroy', $user->id)}}" method="POST">

                                    @csrf

                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Инициализация Select2 для элемента с классом 'select2'
            $('.select2').select2();
        });
    </script>

    <script src="{{asset('multi-select.js')}}">

@endsection
