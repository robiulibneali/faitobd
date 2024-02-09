<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\BikeManagement\BikeMotorType;
use Illuminate\Auth\Access\HandlesAuthorization;

class BikeMotorTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the bikeMotorType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeMotorType can view the model.
     */
    public function view(User $user, BikeMotorType $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeMotorType can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeMotorType can update the model.
     */
    public function update(User $user, BikeMotorType $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeMotorType can delete the model.
     */
    public function delete(User $user, BikeMotorType $model): bool
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
     * Determine whether the bikeMotorType can restore the model.
     */
    public function restore(User $user, BikeMotorType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the bikeMotorType can permanently delete the model.
     */
    public function forceDelete(User $user, BikeMotorType $model): bool
    {
        return false;
    }
}
