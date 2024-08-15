<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Page;

class PagePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->can('view_page');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin, Page $page): bool
    {
        return $admin->can('view_page');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return $admin->can('create_page');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin, Page $page): bool
    {
        return $admin->can('update_page');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, Page $page): bool
    {
        return $admin->can('delete_page');
    }

}
