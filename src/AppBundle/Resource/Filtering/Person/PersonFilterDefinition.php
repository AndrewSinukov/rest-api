<?php

namespace AppBundle\Resource\Filtering\Person;

use AppBundle\Resource\Filtering\AbstractFilterDefinition;
use AppBundle\Resource\Filtering\SortableFilterDefinitionInterface;

class PersonFilterDefinition extends AbstractFilterDefinition implements SortableFilterDefinitionInterface
{
    /**
     * @var null|string
     */
    private $firstName;

    /**
     * @var null|string
     */
    private $lastName;

    /**
     * @var null|string
     */
    private $birthFrom;

    /**
     * @var null|string
     */
    private $birthTo;

    /**
     * @var null|string
     */
    private $sortBy;

    /**
     * @var array|null
     */
    private $sortByArray;

    /**
     * PersonFilterDefinition constructor.
     *
     * @param null|string $firstName
     * @param null|string $lastName
     * @param null|string $birthFrom
     * @param null|string $birthTo
     * @param null|string $sortByQuery
     * @param array|null $sortByArray
     */
    public function __construct(
        ?string $firstName,
        ?string $lastName,
        ?string $birthFrom,
        ?string $birthTo,
        ?string $sortByQuery,
        ?array $sortByArray
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthFrom = $birthFrom;
        $this->birthTo = $birthTo;
        $this->sortBy = $sortByQuery;
        $this->sortByArray = $sortByArray;
    }

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return get_object_vars($this);
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
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return null|string
     */
    public function getBirthFrom(): ?string
    {
        return $this->birthFrom;
    }

    /**
     * @return null|string
     */
    public function getBirthTo(): ?string
    {
        return $this->birthTo;
    }
}