<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\PartsManagement\PartsProduct;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartsProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the partsProduct can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the partsProduct can view the model.
     */
    public function view(User $user, PartsProduct $model): bool
    {
        return true;
    }

    /**
     * Determine whether the partsProduct can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the partsProduct can update the model.
     */
    public function update(User $user, PartsProduct $model): bool
    {
        return true;
    }

    /**
     * Determine whether the partsProduct can delete the model.
     */
    public function delete(User $user, PartsProduct $model): bool
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
     * Determine whether the partsProduct can restore the model.
     */
    public function restore(User $user, PartsProduct $model): bool
    {
        return false;
    }

    /**
     * Determine whether the partsProduct can permanently delete the model.
     */
    public function forceDelete(User $user, PartsProduct $model): bool
    {
        return false;
    }
}
