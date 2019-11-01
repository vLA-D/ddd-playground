<?php

namespace App\Domain\Users\Queries;

use App\Domain\Users\Models\User;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * Class UserQuery
 * @package App\Domain\Users\Queries
 */
class UserQuery extends QueryBuilder
{
    /**
     * UserQuery constructor.
     */
    public function __construct()
    {
        parent::__construct(User::query());

        $this
            ->allowedFilters(['id', 'name', 'email'])
            ->allowedSorts(['id', 'name', 'email'])
            ->allowedIncludes([]);
    }
}
