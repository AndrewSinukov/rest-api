<?php

namespace AppBundle\Resource\Pagination;

use AppBundle\Resource\Filtering\FilterDefinitionInterface;
use AppBundle\Resource\Filtering\ResourceFilterInterface;
use Hateoas\Representation\PaginatedRepresentation;

interface PaginationInterface
{
    /**
     * @param Page $page
     * @param FilterDefinitionInterface $filter
     * @return PaginatedRepresentation
     */
    public function paginate(Page $page, FilterDefinitionInterface $filter): PaginatedRepresentation;

    /**
     * @return ResourceFilterInterface
     */
    public function getResourceFilter(): ResourceFilterInterface;

    /**
     * @return string
     */
    public function getRouteName(): string;
}