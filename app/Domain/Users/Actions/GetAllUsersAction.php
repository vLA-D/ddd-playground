<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Models\User;
use App\Domain\Users\Queries\UserQuery;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class GetAllUsersAction
 * @package App\Domain\Users\Actions
 */
class GetAllUsersAction
{
    private $query;

    /**
     * GetAllUsersAction constructor.
     * @param UserQuery $query
     */
    public function __construct(UserQuery $query)
    {
        $this->query = $query;
    }

    /**
     * @return User[]|Collection
     */
    public function execute()
    {
        return $this->query->get();
    }
}
