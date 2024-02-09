<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\BikeManagement\MotorBike;
use Illuminate\Auth\Access\HandlesAuthorization;

class MotorBikePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the motorBike can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the motorBike can view the model.
     */
    public function view(User $user, MotorBike $model): bool
    {
        return true;
    }

    /**
     * Determine whether the motorBike can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the motorBike can update the model.
     */
    public function update(User $user, MotorBike $model): bool
    {
        return true;
    }

    /**
     * Determine whether the motorBike can delete the model.
     */
    public function delete(User $user, MotorBike $model): bool
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
     * Determine whether the motorBike can restore the model.
     */
    public function restore(User $user, MotorBike $model): bool
    {
        return false;
    }

    /**
     * Determine whether the motorBike can permanently delete the model.
     */
    public function forceDelete(User $user, MotorBike $model): bool
    {
        return false;
    }
}
