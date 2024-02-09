<?php

namespace App\Policies;

use App\Models\Backend\AdditionalFeatures\Faq;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FaqPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the faq can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the faq can view the model.
     */
    public function view(User $user, Faq $model): bool
    {
        return true;
    }

    /**
     * Determine whether the faq can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the faq can update the model.
     */
    public function update(User $user, Faq $model): bool
    {
        return true;
    }

    /**
     * Determine whether the faq can delete the model.
     */
    public function delete(User $user, Faq $model): bool
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
     * Determine whether the faq can restore the model.
     */
    public function restore(User $user, Faq $model): bool
    {
        return false;
    }

    /**
     * Determine whether the faq can permanently delete the model.
     */
    public function forceDelete(User $user, Faq $model): bool
    {
        return false;
    }
}
