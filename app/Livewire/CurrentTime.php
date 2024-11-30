<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Current Time')]
class CurrentTime extends Component
{

    public $time;
    public function mount()
    {
        $this->time = now();
    }

    public function incrementTime()
    {
        $this->time = $this->time->addMinutes(1);
    }

    public function decrementTime(){
        $this->time = $this->time->subMinutes(1);
    }

    public function resetTime(){
        $this->time = now();
    }

    public function updatedTime(){
        $this->time = $this->time->format('H:i:s');
    }

    public function updated()
    {

    }

    public function refresh()
    {

    }
    public function render()
    {
        return view('livewire.current-time');
    }
}
