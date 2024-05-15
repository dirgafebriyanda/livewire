<?php

namespace App\Livewire\Dashboard;

use App\Models\User as ModelsUser;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Dashboard | User')]
#[Layout('dashboard.layouts.app')]
class User extends Component
{   use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $user = ModelsUser::orderBy('id', 'asc')->paginate(5);
        return view('livewire.dashboard.user',[
            'users' => $user
        ]);
    }
}
