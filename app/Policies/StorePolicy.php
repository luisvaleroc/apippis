<?php

namespace App\Policies;

use App\User;
use App\Store;


use Illuminate\Auth\Access\HandlesAuthorization;

class StorePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pass(User $user, Store $store)
    {
        return $user->brand_id == $store->brand_id; 
    }
}
