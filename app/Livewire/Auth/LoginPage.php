<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

#[Title('Login')]
class LoginPage extends Component
{
    public $email;
    public $password;
    public $remember = false; // opsional kalau mau fitur "ingat saya"

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
        ]);

        // Coba login
        if (Auth::attempt(
            ['email' => $this->email, 'password' => $this->password],
            $this->remember // true kalau centang remember me
        )) {
            request()->session()->regenerate(); // regenerasi session ID biar lebih aman
            return redirect()->intended('/'); // redirect ke dashboard
        }

        // Kalau gagal
        $this->addError('email', 'Email atau password salah.');
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
