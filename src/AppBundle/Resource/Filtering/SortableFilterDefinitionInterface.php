<?php

namespace AppBundle\Resource\Filtering;

interface SortableFilterDefinitionInterface
{
    /**
     * @return null|string
     */
    public function getSortByQuery(): ?string;

    /**
     * @return array|null
     */
    public function getSortByArray(): ?array;
}