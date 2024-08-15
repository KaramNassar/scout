<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Menu;

class MenuPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $menu): bool
    {
        return $menu->can('view_page');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $menu, Menu $page): bool
    {
        return $menu->can('view_page');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $menu): bool
    {
        return $menu->can('create_page');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $menu, Menu $page): bool
    {
        return $menu->can('update_page');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $menu, Menu $page): bool
    {
        return $menu->can('delete_page');
    }

}
