<?php

namespace App\Policies;

use App\Enums\PostStatus;
use App\Models\Admin;
use App\Models\Post;

class PostPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->can('view_post');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin, Post $post): bool
    {
        return ($admin->can('view_post') && (($post->admin_id == auth()->id() && $post->status !== PostStatus::PUBLISHED)  || $admin->hasPermissionTo('publish_post')) || $admin->hasRole('super_admin'));
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return $admin->can('create_post');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin, Post $post): bool
    {
        return ($admin->can('update_post') && (($post->admin_id == auth()->id() && $post->status !== PostStatus::PUBLISHED)  || $admin->hasPermissionTo('publish_post')) || $admin->hasRole('super_admin'));
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin, Post $post): bool
    {
        return ($admin->can('delete_post') && (($post->admin_id == auth()->id() && $post->status !== PostStatus::PUBLISHED)  || $admin->hasPermissionTo('publish_post')) || $admin->hasRole('super_admin'));
    }

    /**
     * Determine whether the user can publish the model.
     */
    public function publish(Admin $admin, Post $post): bool
    {
        return ($admin->can('publish_post') || $admin->hasRole('super_admin'));
    }

}
