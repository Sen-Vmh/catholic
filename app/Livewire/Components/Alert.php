<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Alert extends Component
{
    public $messages = [];

    public function mount()
    {
        // Check for session messages on mount
        if (session()->has('alert')) {
            $alert = session('alert');
            $this->addMessage($alert['message'], $alert['type']);
        }
    }

    public function addMessage($message, $type = 'info')
    {
        $this->messages[] = [
            'message' => $message,
            'type' => $type
        ];
    }

    public function removeMessage($index)
    {
        unset($this->messages[$index]);
        $this->messages = array_values($this->messages);
    }

    public function render()
    {
        return view('livewire.components.alert');
    }
}
