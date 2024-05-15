<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
#[Title('Gallery')]
class Gallery extends Component
{
    public function render()
    {
        return view('livewire.gallery');
    }
}
