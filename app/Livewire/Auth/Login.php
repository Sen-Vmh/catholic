<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;
    public $show = false;

    public function mount()
    {
        $this->show = session()->has('showLogin');
    }

    #[On('show-login')]
    public function show()
    {
        $this->show = !$this->show;
    }

    public function login()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $this->remember)) {
            return redirect()->intended();
        }

        $this->addError('email', trans('auth.failed'));
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
