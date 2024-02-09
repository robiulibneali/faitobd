<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\BikeManagement\BikeEngineSize;
use Illuminate\Auth\Access\HandlesAuthorization;

class BikeEngineSizePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the bikeEngineSize can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeEngineSize can view the model.
     */
    public function view(User $user, BikeEngineSize $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeEngineSize can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeEngineSize can update the model.
     */
    public function update(User $user, BikeEngineSize $model): bool
    {
        return true;
    }

    /**
     * Determine whether the bikeEngineSize can delete the model.
     */
    public function delete(User $user, BikeEngineSize $model): bool
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
     * Determine whether the bikeEngineSize can restore the model.
     */
    public function restore(User $user, BikeEngineSize $model): bool
    {
        return false;
    }

    /**
     * Determine whether the bikeEngineSize can permanently delete the model.
     */
    public function forceDelete(User $user, BikeEngineSize $model): bool
    {
        return false;
    }
}
