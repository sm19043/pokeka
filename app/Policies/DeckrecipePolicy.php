<?php

namespace App\Policies;

use App\Deckrecipe;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeckrecipePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any deckrecipes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the deckrecipe.
     *
     * @param  \App\User  $user
     * @param  \App\Deckrecipe  $deckrecipe
     * @return mixed
     */
    public function view(User $user, Deckrecipe $deckrecipe)
    {
        //
    }

    /**
     * Determine whether the user can create deckrecipes.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the deckrecipe.
     *
     * @param  \App\User  $user
     * @param  \App\Deckrecipe  $deckrecipe
     * @return mixed
     */
    public function update(User $user, Deckrecipe $deckrecipe)
    {
        return $user->id === $deckrecipe->user_id;
        //
    }

    /**
     * Determine whether the user can delete the deckrecipe.
     *
     * @param  \App\User  $user
     * @param  \App\Deckrecipe  $deckrecipe
     * @return mixed
     */
    public function delete(User $user, Deckrecipe $deckrecipe)
    {
        //
    }

    /**
     * Determine whether the user can restore the deckrecipe.
     *
     * @param  \App\User  $user
     * @param  \App\Deckrecipe  $deckrecipe
     * @return mixed
     */
    public function restore(User $user, Deckrecipe $deckrecipe)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the deckrecipe.
     *
     * @param  \App\User  $user
     * @param  \App\Deckrecipe  $deckrecipe
     * @return mixed
     */
    public function forceDelete(User $user, Deckrecipe $deckrecipe)
    {
        //
    }
}
