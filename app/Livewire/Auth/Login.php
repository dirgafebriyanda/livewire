<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    public $email;
    public $password;
   public function render()
{
    return view('livewire.auth.login');
}

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (auth()->attempt($credentials)) {
        return $this->redirect('/dashboard', navigate: true);
        } else {
            // Jika login gagal, tampilkan pesan error
            session()->flash('error', 'Email atau password salah.');
        }
    }
}
