<?php

namespace App\Policies;

use App\User;

class TopSecretPolicy
{
    public function index(User $user)
    {
        return true; // $user->name === 'James Bond';
    }
}
