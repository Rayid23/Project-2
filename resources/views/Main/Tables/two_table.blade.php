@extends('layouts.main')

@section('title', 'Первая таблица')

@section('content')

    <div class="container">

        <div class="row mt-2">
            <h2 class="text-center">Роли</h2>
            <hr style="hreight: 5px; background-color: #000000">
        </div>

        <div class="col-12 text-center">

            <!-- Кнопочка создание нового роля -->
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#RoleCreateModal">
                Create
            </button>

            <!-- Тело RoleCreateModal -->
            <div class="modal fade" id="RoleCreateModal" tabindex="-1" aria-labelledby="RoleCreateModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="RoleCreateModalLabel">Добавь новую роль</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('roles.store')}}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <input class="form-control" name="name" type="text" placeholder="Name">
                                </div>

                                <div class="mb-2">
                                    <select name="color" class="form-select" aria-label="Default select example">
                                        <option value="primary">Primary</option>
                                        <option value="danger">Danger</option>
                                        <option value="success">Success</option>
                                        <option value="dark">Dark</option>
                                    </select>
                                </div>

                                <div class="mb-2">
                                    <select name="permission" class="form-select" aria-label="Default select example">
                                        <option selected value="none">Нет</option>
                                        <option value="all-page">Доступ ко всем страницам</option>
                                    </select>
                                </div>

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
                <table class="table table-striped table-bordered table-dark text-center" style="width: 100%">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAME</th>
                        <th scope="col">DELETE</th>
                        <th scope="col">Permission</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $role)

                        <!-- Если я Админ пропускаю дальнейший код -->
                        @if($role->name == 'Admin')
                            @php
                                continue;
                            @endphp
                        @endif

                        <tr>
                            <th scope="row">{{$role->id}}</th>
                            <td>
                                <button type="button" class="btn btn-{{$role->color}}">{{$role->name}}</button>
                            </td>
                            <td>
                                <form action="{{route('roles.destroy', $role->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                            <td>
                                <!-- Модалб для разрещение url -->
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                        data-bs-target="#PermissionModal{{$role->id}}">
                                    <i class="bi bi-gear"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="PermissionModal{{$role->id}}" tabindex="-1"
                                     aria-labelledby="PermissionModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="PermissionModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>

                                            <livewire:permission-live :setRole="$role"/>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>

@endsection
