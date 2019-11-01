<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\User;

/**
 * Class GetUserByIdAction
 * @package App\Domain\Users\Actions
 */
class GetUserByIdAction
{
    /**
     * @param int $id
     * @return User
     */
    public function execute(int $id)
    {
        return User::findOrFail($id);
    }
}
