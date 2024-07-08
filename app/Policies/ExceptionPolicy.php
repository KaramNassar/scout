<?php

namespace App\Policies;

use App\Models\Admin;
use BezhanSalleh\FilamentExceptions\Models\Exception;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExceptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the admin can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->can('view_any_exception');
    }

    /**
     * Determine whether the admin can view the model.
     */
    public function view(Admin $admin, Exception $exception): bool
    {
        return $admin->can('view_exception');
    }

    /**
     * Determine whether the admin can create models.
     */
    public function create(Admin $admin): bool
    {
        return true;
    }

    /**
     * Determine whether the admin can delete the model.
     */
    public function delete(Admin $admin, Exception $exception): bool
    {
        return $admin->can('delete_exception');
    }

}
