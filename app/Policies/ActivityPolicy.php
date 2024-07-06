<?php

namespace App\Policies;

use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Activitylog\Models\Activity;

class ActivityPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the admin can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->can('view_any_activity::log');
    }

    /**
     * Determine whether the admin can view the model.
     */
    public function view(Admin $admin, Activity $activity): bool
    {
        return $admin->can('view_activity::log');
    }

    /**
     * Determine whether the admin can create models.
     */
    public function create(Admin $admin): bool
    {
        return true;
    }

}
