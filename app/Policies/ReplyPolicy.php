<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;

class ReplyPolicy extends Policy
{
    public function update(User $user, Reply $reply)
    {
        return $user->isAuthoOf($reply);
    }

    public function destroy(User $user, Reply $reply)
    {
        return $user->isAuthoOf($reply) || $user->isAuthoOf($reply->topic);
    }
}
