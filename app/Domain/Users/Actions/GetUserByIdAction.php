<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Queries\UserQuery;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GetUserByIdAction
 * @package App\Domain\Users\Actions
 */
class GetUserByIdAction
{
    private $query;

    /**
     * GetUserByIdAction constructor.
     * @param UserQuery $query
     */
    public function __construct(UserQuery $query)
    {
        $this->query = $query;
    }

    /**
     * @param int $id
     * @return UserQuery|UserQuery[]|Collection|Model|null
     */
    public function execute(int $id)
    {
        return $this->query->find($id);
    }
}
