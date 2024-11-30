<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class PostCreate extends Component
{
    #[Rule('required', message: 'Имя осталось пустым')]
    #[Rule('max:255', message: 'Максимум 255 символов')]
    #[Rule('min:10', message: 'Минимум 10 символов')]
    public $name12 = '';

    #[Rule('required', message: 'Эмайл осталься пустым')]
    #[Rule('email', message: 'Введите эмайл!')]
    public $email = '';
    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name12,
            'email' => $this->email,
            'password' => $this->name . $this->email,
        ]);

        $this->redirect('/show-table');
    }
    public function render()
    {
        return view('livewire.post-create');
    }
}
