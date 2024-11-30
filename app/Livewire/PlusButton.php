<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Plus Button')]
class PlusButton extends Component
{
    public $count = 0;

    public function increment(): void
    {
        $this->count++;
    }



    public function incrementBy($value): void
    {
        $this->count += $value;
    }

    public function render()
    {
        return view('livewire.plus-button');
    }
}
