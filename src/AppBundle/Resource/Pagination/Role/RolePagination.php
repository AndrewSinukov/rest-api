<?php

namespace AppBundle\Resource\Pagination\Role;

use AppBundle\Resource\Filtering\ResourceFilterInterface;
use AppBundle\Resource\Filtering\Role\RoleResourceFilter;
use AppBundle\Resource\Pagination\AbstractPagination;

class RolePagination extends AbstractPagination
{
    private const ROUTE = 'get_movie_roles';

    /**
     * @var RoleResourceFilter
     */
    private $resourceFilter;

    /**
     * RolePagination constructor.
     *
     * @param RoleResourceFilter $resourceFilter
     */
    public function __construct(RoleResourceFilter $resourceFilter)
    {
        $this->resourceFilter = $resourceFilter;
    }

    /**
     * @return ResourceFilterInterface
     */
    public function getResourceFilter(): ResourceFilterInterface
    {
        return $this->resourceFilter;
    }

    /**
     * @return string
     */
    public function getRouteName(): string
    {
        return self::ROUTE;
    }
}