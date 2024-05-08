<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Register')]

class Register extends Component
{
    #[Rule('required|max:100')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min:6')]
    public $password = '';

    public function register()
{
    $validated = $this->validate();

    $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password'])
    ]);
    if ($user) {
        session()->flash('message', 'Registered successfully');
        return $this->redirect('/login', navigate: true);
    } else {
        session()->flash('message', 'Registered failed!');
    }
}

    public function render()
    {
        return view('livewire.auth.register');
    }
}
