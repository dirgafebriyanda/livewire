<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('dashboard.layouts.app')]
#[Title('Dashboard | Customer')]
class Customer extends Component
{
    public function render()
    {
        return view('livewire.dashboard.customer');
    }
}
