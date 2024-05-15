<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('dashboard.layouts.app')]
#[Title('Profile')]
class Profile extends Component
{
    public function render()
    {
        return view('livewire.dashboard.profile');
    }
}
