<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AdminDashboard extends Component
{
    #[Layout('components.layouts.main')]
    public function render()
    {
        return view('livewire.admin.admin-dashboard');
    }
}
