<?php

namespace AppBundle\Resource\Pagination\Person;

use AppBundle\Resource\Filtering\Person\PersonResourceFilter;
use AppBundle\Resource\Filtering\ResourceFilterInterface;
use AppBundle\Resource\Pagination\AbstractPagination;

class PersonPagination extends AbstractPagination
{
    private const ROUTE = 'get_humans';

    /**
     * @var PersonResourceFilter
     */
    private $resourceFilter;

    /**
     * PersonPagination constructor.
     *
     * @param PersonResourceFilter $resourceFilter
     */
    public function __construct(PersonResourceFilter $resourceFilter)
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