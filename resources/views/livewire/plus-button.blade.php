<div>
    Count: {{$count}}
    <hr>
    Click Plus: <button class="btn btn-dark" wire:click="increment">+</button>
    <hr>
    Click Plus +2:
    <button class="btn btn-dark" wire:click="incrementBy(2)">+</button>
    <hr>
    Mouser hover Plus: <button class="btn btn-dark" wire:mouseenter="increment">+</button>
    <hr>
    Click to Window plus: <button class="btn btn-dark" wire:click.window="increment">+</button>
    <hr>
    Добавление плюс за 10 сек: <button class="btn btn-dark" wire:click.throttle.10000ms="increment">+</button>
</div>
