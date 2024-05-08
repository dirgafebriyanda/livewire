<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('dashboard.layouts.app')]
#[Title('Logout')]
class Logout extends Component
{
    public function render()
    {
        return view('livewire.dashboard.logout');
    }
     public function logout()
    {
         Auth::logout();
        return $this->redirect('/login', navigate: true);
    }
}
