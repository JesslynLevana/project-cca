<?php

namespace App\Policies;

use App\Models\SetTeacherStatus;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SetTeacherStatusPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SetTeacherStatus $setTeacherStatus): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SetTeacherStatus $setTeacherStatus): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SetTeacherStatus $setTeacherStatus): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, SetTeacherStatus $setTeacherStatus): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, SetTeacherStatus $setTeacherStatus): bool
    {
        //
    }
}
