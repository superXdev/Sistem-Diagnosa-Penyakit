<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Riwayat;
use Illuminate\Auth\Access\HandlesAuthorization;

class RiwayatPolicy
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

    public function show(User $user, Riwayat $riwayat)
    {
        return $user->id === $riwayat->user_id || $user->hasRole('Admin');
    }
}
