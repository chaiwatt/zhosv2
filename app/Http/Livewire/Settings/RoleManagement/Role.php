<?php

namespace App\Http\Livewire\Settings\RoleManagement;

use Livewire\Component;

class Role extends Component
{
    public $state = [];

    public function mount(){
        $this->state['name'] = 'this is from mounting';
    }

    public function createRole(){
        dd($this->state);
    }

    public function render()
    {
        return view('livewire.settings.role-management.role');
    }
}
