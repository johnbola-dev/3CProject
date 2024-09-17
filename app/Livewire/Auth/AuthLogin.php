<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class AuthLogin extends Component
{

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.auth-login');
    }
}
