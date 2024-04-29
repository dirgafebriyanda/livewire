<?php

namespace App\Livewire\Dashboard;

use App\Models\User as ModelsUser;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Dashboard | User')]
#[Layout('dashboard.layouts.app')]
class User extends Component
{
    public function render()
    {
        $user = ModelsUser::orderBy('id', 'asc')->paginate(10);
        return view('livewire.dashboard.user',[
            'users' => $user
        ]);
    }
}
