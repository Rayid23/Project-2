<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class ShowPost extends Component
{
    public function delete(User $user)
    {
        $user->delete();
    }

    public function render()
    {
        return view('livewire.show-post', [
            'users' => \App\Models\User::all(),
        ]);
    }
}
