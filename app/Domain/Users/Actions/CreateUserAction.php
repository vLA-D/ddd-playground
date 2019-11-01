<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\User;

/**
 * Class CreateUserAction
 * @package App\Domain\Users\Actions
 */
class CreateUserAction
{
    /**
     * @param array $data
     * @return User
     */
    public function execute(array $data)
    {
        return User::create($data);
    }
}
