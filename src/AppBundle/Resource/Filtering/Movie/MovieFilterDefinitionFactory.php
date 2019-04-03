<?php

namespace AppBundle\Resource\Filtering\Movie;

use AppBundle\Resource\Filtering\AbstractFilterDefinitionFactory;
use Symfony\Component\HttpFoundation\Request;

class MovieFilterDefinitionFactory extends AbstractFilterDefinitionFactory
{
    private const ACCEPTED_SORT_FIELDS = ['id', 'title', 'year', 'time'];

    /**
     * @param Request $request
     * @return MovieFilterDefinition
     */
    public function factory(Request $request): MovieFilterDefinition
    {
        return new MovieFilterDefinition(
            $request->get('title'),
            $request->get('yearFrom'),
            $request->get('yearTo'),
            $request->get('timeFrom'),
            $request->get('timeTo'),
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