<div>
    <h1>Show Post</h1>

    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Имя</th>
            <th class="text-center">Роль</th>
            <th class="text-center">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr wire:key="{{$user->id}}">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{implode('-', $user->roles()->pluck('name')->toArray())}}</td>
                <td>
                    <button
                        type="button"
                        wire:click="delete({{$user->id}})"
                        wire:confirm="Вы действительно хотите удалить? {{$user->id}}"
                    >
                        Удалить
                    </button>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>

</div>
