<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = 'World';

    public function changeName()
    {
        $this->name = 'Laravel Enthusiast';
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}