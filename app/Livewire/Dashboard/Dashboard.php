<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Dashboard')]
#[Layout('dashboard.layouts.app')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
