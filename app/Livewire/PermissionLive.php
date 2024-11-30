<?php

namespace App\Livewire;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;

class PermissionLive extends Component
{
    public $permissions;
    public $setRole;

    public function mount()
    {
        $this->permissions = Permission::paginate(5);
    }

    public function Role(Role $role)
    {
        $this->setRole = $role;
    }

    public function render()
    {
        return view('livewire.permission-live', [
            'permissions' => $this->permissions,
            'role' => $this->setRole
        ]);
    }
}
