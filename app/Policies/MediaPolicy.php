<?php

namespace App\Policies;

use App\Models\Admin;
use Awcodes\Curator\Models\Media;

class MediaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->can('view_media');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin, Media $media): bool
    {
        return $admin->can('view_media');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return $admin->can('create_media');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin, Media $media): bool
    {
        return $admin->can('update_media');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, Media $media): bool
    {
        return $admin->can('delete_media');
    }

}
