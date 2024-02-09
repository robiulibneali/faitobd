<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\PartsManagement\PartsParentBrand;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartsParentBrandPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the partsParentBrand can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the partsParentBrand can view the model.
     */
    public function view(User $user, PartsParentBrand $model): bool
    {
        return true;
    }

    /**
     * Determine whether the partsParentBrand can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the partsParentBrand can update the model.
     */
    public function update(User $user, PartsParentBrand $model): bool
    {
        return true;
    }

    /**
     * Determine whether the partsParentBrand can delete the model.
     */
    public function delete(User $user, PartsParentBrand $model): bool
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
     * Determine whether the partsParentBrand can restore the model.
     */
    public function restore(User $user, PartsParentBrand $model): bool
    {
        return false;
    }

    /**
     * Determine whether the partsParentBrand can permanently delete the model.
     */
    public function forceDelete(User $user, PartsParentBrand $model): bool
    {
        return false;
    }
}
