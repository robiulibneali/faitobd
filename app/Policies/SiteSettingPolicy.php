<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\AdditionalFeatures\SiteSetting;
use Illuminate\Auth\Access\HandlesAuthorization;

class SiteSettingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the siteSetting can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the siteSetting can view the model.
     */
    public function view(User $user, SiteSetting $model): bool
    {
        return true;
    }

    /**
     * Determine whether the siteSetting can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the siteSetting can update the model.
     */
    public function update(User $user, SiteSetting $model): bool
    {
        return true;
    }

    /**
     * Determine whether the siteSetting can delete the model.
     */
    public function delete(User $user, SiteSetting $model): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the siteSetting can restore the model.
     */
    public function restore(User $user, SiteSetting $model): bool
    {
        return false;
    }

    /**
     * Determine whether the siteSetting can permanently delete the model.
     */
    public function forceDelete(User $user, SiteSetting $model): bool
    {
        return false;
    }
}
