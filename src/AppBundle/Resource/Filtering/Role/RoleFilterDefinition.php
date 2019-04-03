<?php

namespace AppBundle\Resource\Filtering\Role;

use AppBundle\Resource\Filtering\AbstractFilterDefinition;
use AppBundle\Resource\Filtering\SortableFilterDefinitionInterface;

class RoleFilterDefinition extends AbstractFilterDefinition implements SortableFilterDefinitionInterface
{
    /**
     * @var null|string
     */
    private $playedName;

    /**
     * @var int|null
     */
    private $movie;

    /**
     * @var null|string
     */
    private $sortBy;

    /**
     * @var array|null
     */
    private $sortByArray;

    /**
     * RoleFilterDefinition constructor.
     *
     * @param null|string $playedName
     * @param int|null $movie
     * @param null|string $sortByQuery
     * @param array|null $sortByArray
     */
    public function __construct(
        ?string $playedName,
        ?int $movie,
        ?string $sortByQuery,
        ?array $sortByArray
    ) {
        $this->playedName = $playedName;
        $this->movie = $movie;
        $this->sortBy = $sortByQuery;
        $this->sortByArray = $sortByArray;
    }

    /**
     * @return null|string
     */
    public function getPlayedName(): ?string
    {
        return $this->playedName;
    }

    /**
     * @return int|null
     */
    public function getMovie(): ?int
    {
        return $this->movie;
    }

    /**
     * @return null|string
     */
    public function getSortByQuery(): ?string
    {
        return $this->sortBy;
    }

    /**
     * @return array|null
     */
    public function getSortByArray(): ?array
    {
        return $this->sortByArray;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return get_object_vars($this);
    }
}