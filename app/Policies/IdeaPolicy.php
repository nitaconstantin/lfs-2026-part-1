<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class IdeaPolicy
{
 
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ?Idea $idea)
    {
        return $user->is($idea->user) ? Response::allow() : Response::denyAsNotFound();
    }

    public function create(User $user){
        return Auth::user();
    }

    

    

   
}
