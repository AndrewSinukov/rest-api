<?php

namespace AppBundle\Resource\Filtering;

use Doctrine\ORM\QueryBuilder;

interface ResourceFilterInterface
{
    /**
     * @param $filter
     * @return QueryBuilder
     */
    public function getResources($filter): QueryBuilder;

    /**
     * @param $filter
     * @return QueryBuilder
     */
    public function getResourceCount($filter): QueryBuilder;
}