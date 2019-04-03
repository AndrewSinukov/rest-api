<?php

namespace AppBundle\Resource\Pagination\Movie;

use AppBundle\Resource\Filtering\Movie\MovieResourceFilter;
use AppBundle\Resource\Filtering\ResourceFilterInterface;
use AppBundle\Resource\Pagination\AbstractPagination;

class MoviePagination extends AbstractPagination
{
    private const ROUTE = 'get_movies';

    /**
     * @var MovieResourceFilter
     */
    private $resourceFilter;

    /**
     * MoviePagination constructor.
     *
     * @param MovieResourceFilter $resourceFilter
     */
    public function __construct(MovieResourceFilter $resourceFilter)
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