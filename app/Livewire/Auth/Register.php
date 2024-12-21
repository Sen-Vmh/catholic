<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $show = false;

    protected $listeners = [
        'show-register' => 'show',
        'show-login' => 'hide'
    ];

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ];

    #[On('show-register')]
    public function show()
    {
        $this->show = true;
        $this->dispatch('hide-login');
    }

    public function hide()
    {
        $this->show = false;
    }

    public function register()
    {
        $validatedData = $this->validate();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);

        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
