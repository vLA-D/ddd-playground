<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\User;

/**
 * Class UpdateUserByIdAction
 * @package App\Domain\Users\Actions
 */
class UpdateUserByIdAction
{
    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function execute(int $id, array $data)
    {
        return User::find($id)->update($data);
    }
}
