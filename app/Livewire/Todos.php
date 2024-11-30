<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos list')]
class Todos extends Component
{
    public $todo = '';
    public $todos = [];

    public function mount()
    {
        $this->todos = User::all();
    }

    public function add(): void
    {
        $user = new User();

        $user->name = $this->todo;
        $user->email = $this->todo . '@gmail.com';
        $user->password = $this->todo . '12121212';

        $user->save();

        $this->todos[] = $user;

        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
