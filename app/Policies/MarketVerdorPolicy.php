<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MarketVerdor;
use Illuminate\Auth\Access\HandlesAuthorization;

class MarketVerdorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the marketVerdor can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the marketVerdor can view the model.
     */
    public function view(User $user, MarketVerdor $model): bool
    {
        return true;
    }

    /**
     * Determine whether the marketVerdor can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the marketVerdor can update the model.
     */
    public function update(User $user, MarketVerdor $model): bool
    {
        return true;
    }

    /**
     * Determine whether the marketVerdor can delete the model.
     */
    public function delete(User $user, MarketVerdor $model): bool
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
     * Determine whether the marketVerdor can restore the model.
     */
    public function restore(User $user, MarketVerdor $model): bool
    {
        return false;
    }

    /**
     * Determine whether the marketVerdor can permanently delete the model.
     */
    public function forceDelete(User $user, MarketVerdor $model): bool
    {
        return false;
    }
}
