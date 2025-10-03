<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User; // <-- jangan lupa import model User
use Illuminate\Support\Facades\Hash; // untuk hashing password
use Illuminate\Support\Facades\Auth; // untuk login user
use Livewire\Attributes\Title;

#[Title('Register')]
class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation; // tambahin buat validasi confirmed

    public function register()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:3|max:255|confirmed',
        ]);

        // Simpan user ke database
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), // lebih aman pake Hash::make
        ]);

       

        // Redirect ke dashboard / home
        return redirect()->intended('/login'); // ubah sesuai kebutuhan lo
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
