<div>

    <div class="col-8 offset-2">
        <div x-data>
            <span x-text='$wire.name12'></span>
            <button x-on:click='$wire.name12 = ""'>Clear</button>
        </div>


        <form wire:submit="save" class="bg-white shadow rounded py-3 px-4 border border-dark">
            <h2>Новый пользователь:</h2>
            <label>
                <span>Имя</span>
                <input class="form-control" type="text" wire:model.live="name12">
                <small>Characters
                    <span x-show="false">12</span>
                </small>
                @error('name') <em class="error">{{ $message }}</em> @enderror
            </label>

            <label>
                <span>Email</span>
                <input class="form-control" type="email" wire:model="email">
                <small>
                    <span x-></span>
                </small>
                @error('email') <em class="error">{{ $message }}</em> @enderror
            </label>

            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>

    </div>

</div>
