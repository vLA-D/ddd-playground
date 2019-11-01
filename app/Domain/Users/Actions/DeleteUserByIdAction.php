<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\User;
use Exception;

/**
 * Class DeleteUserByIdAction
 * @package App\Domain\Users\Actions
 */
class DeleteUserByIdAction
{
    /**
     * @param int $id
     * @return bool|null
     * @throws Exception
     */
    public function execute(int $id)
    {
        return User::destroy($id);
    }
}
