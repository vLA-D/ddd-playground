<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class GetAllUsersAction
 * @package App\Domain\Users\Actions
 */
class GetAllUsersAction
{
    /**
     * @return User[]|Collection
     */
    public function execute()
    {
        return User::all();
    }
}
