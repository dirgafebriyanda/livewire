<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Policy')]
class Policy extends Component
{
    public function render()
    {
        return view('livewire.policy');
    }
}
