<?php


namespace App\Provider;


use App\DTO\ProjectManager;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class FileProjectManagerProvider implements ProjectManagerProvider
{

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    /**
     * FileProjectManagerProvider constructor.
     * @param ParameterBagInterface $parameterBag
     */
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getOneById(string $id): ProjectManager
    {
        return new ProjectManager('', '', '', '');
    }
}