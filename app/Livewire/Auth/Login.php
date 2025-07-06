<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            session()->flash('error', 'Email tidak ditemukan.');
            return;
        }

        if (!Hash::check($this->password, $user->password)) {
            session()->flash('error', 'Password salah.');
            return;
        }

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Login berhasil!');
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Auth gagal meskipun password cocok. Cek konfigurasi guard.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
