<?php

namespace AppBundle\Resource\Filtering\Role;

use AppBundle\Resource\Filtering\AbstractFilterDefinitionFactory;
use Symfony\Component\HttpFoundation\Request;

class RoleFilterDefinitionFactory extends AbstractFilterDefinitionFactory
{
    private const ACCEPTED_SORT_FIELDS = ['playedName', 'movie'];

    /**
     * @param Request $request
     * @param int|null $movie
     * @return RoleFilterDefinition
     */
    public function factory(Request $request, ?int $movie): RoleFilterDefinition
    {
        return new RoleFilterDefinition(
            $request->get('playedName'),
            $movie,
            $request->get('sortBy'),
            $this->sortQueryToArray($request->get('sortBy'))
        );
    }

    /**
     * @return array
     */
    public function getAcceptedSortFields(): array
    {
        return self::ACCEPTED_SORT_FIELDS;
    }
}