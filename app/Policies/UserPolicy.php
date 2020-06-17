<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

   function managePatients(User $user){
        return !$user->role_id->isEqual(1);
   }

   function manageWorkers(User $user){
       return $user->role_id->isEqual(1);
   }
}
