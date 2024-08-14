<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Troop;

class TroopPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->can('view_troop');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin, Troop $troop): bool
    {
        return $admin->can('view_troop');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return $admin->can('create_troop');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin, Troop $troop): bool
    {
        return $admin->can('update_troop');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, Troop $troop): bool
    {
        return $admin->can('delete_troop');
    }

}
