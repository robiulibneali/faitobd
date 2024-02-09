<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\PartsManagement\PartsBrandCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartsBrandCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the partsBrandCategory can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the partsBrandCategory can view the model.
     */
    public function view(User $user, PartsBrandCategory $model): bool
    {
        return true;
    }

    /**
     * Determine whether the partsBrandCategory can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the partsBrandCategory can update the model.
     */
    public function update(User $user, PartsBrandCategory $model): bool
    {
        return true;
    }

    /**
     * Determine whether the partsBrandCategory can delete the model.
     */
    public function delete(User $user, PartsBrandCategory $model): bool
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
     * Determine whether the partsBrandCategory can restore the model.
     */
    public function restore(User $user, PartsBrandCategory $model): bool
    {
        return false;
    }

    /**
     * Determine whether the partsBrandCategory can permanently delete the model.
     */
    public function forceDelete(User $user, PartsBrandCategory $model): bool
    {
        return false;
    }
}
