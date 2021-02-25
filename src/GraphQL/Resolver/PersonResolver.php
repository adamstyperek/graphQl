<?php


namespace App\GraphQL\Resolver;

use App\Exception\PersonNotExistsException;
use App\Provider\ProjectManagerProvider;
use Overblog\GraphQLBundle\Resolver\TypeResolver;

class PersonResolver
{
    /**
     * @var TypeResolver
     */
    private $typeResolver;
    /**
     * @var ProjectManagerProvider
     */
    private $projectManagerProvider;

    public function __construct(TypeResolver $typeResolver, ProjectManagerProvider $projectManagerProvider)
    {
        $this->typeResolver = $typeResolver;
        $this->projectManagerProvider = $projectManagerProvider;
    }

    public function resolveType($value)
    {
        $projectManagerType = $this->typeResolver->resolve('ProjectManager');

        return $projectManagerType;
    }

    public function resolveProjectManagers()
    {
        return $this->projectManagerProvider->getAll();

    }

    public function resolveProjectManager($args)
    {
        try {
            return $this->projectManagerProvider->getOneById($args['id']);
        } catch (PersonNotExistsException $exception) {
            return null;
        }
    }
}