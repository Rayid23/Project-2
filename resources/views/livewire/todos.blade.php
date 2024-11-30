<div>
    <form wire:submit="add">
        Ожидание уберание курсора: <input type="text" wire:model.change="todo">
        <hr>
        Писать в онлайн: <input type="text" wire:model.live="todo">
        <hr>
        Ожидание остановки: <input type="text" wire:model.live.debounce="todo">
        <hr>
        Ожидание остановки: <input type="text" wire:model.blur="todo">


        <hr>
        Ваше предложени: <span>{{$todo}}</span>
        <hr>

        <button type="submit">Add</button>
    </form>

    <ul>

        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
            </tr>
            </thead>

            <tbody>
            @foreach($todos as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </ul>
</div>
