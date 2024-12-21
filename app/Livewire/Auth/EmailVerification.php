<?php

// app/Livewire/Auth/EmailVerification.php
namespace App\Livewire\Auth;

use Livewire\Component;

class EmailVerification extends Component
{
    public function resend()
    {
        if (auth()->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard'));
        }

        auth()->user()->sendEmailVerificationNotification();

        session()->flash('status', 'verification-link-sent');
    }

    public function render()
    {
        return view('livewire.auth.email-verification')
            ->layout('layouts.catho-quiz');
    }
}
