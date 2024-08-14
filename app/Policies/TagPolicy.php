<?php

namespace App\Policies;

use App\Models\Admin;
use App\Models\Tag;

class TagPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->can('view_tag');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin, Tag $tag): bool
    {
        return $admin->can('view_tag');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return $admin->can('create_tag');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin, Tag $tag): bool
    {
        return $admin->can('update_tag');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, Tag $tag): bool
    {
        return $admin->can('delete_tag');
    }

}
