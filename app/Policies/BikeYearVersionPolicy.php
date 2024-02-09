<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\BikeManagement\BikeYearVersion;
use Illuminate\Auth\Access\HandlesAuthorization;

class BikeYearVersionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the bikeYearVersion can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeYearVersion can view the model.
     */
    public function view(User $user, BikeYearVersion $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeYearVersion can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeYearVersion can update the model.
     */
    public function update(User $user, BikeYearVersion $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeYearVersion can delete the model.
     */
    public function delete(User $user, BikeYearVersion $model): bool
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
     * Determine whether the bikeYearVersion can restore the model.
     */
    public function restore(User $user, BikeYearVersion $model): bool
    {
        return false;
    }

    /**
     * Determine whether the bikeYearVersion can permanently delete the model.
     */
    public function forceDelete(User $user, BikeYearVersion $model): bool
    {
        return false;
    }
}
