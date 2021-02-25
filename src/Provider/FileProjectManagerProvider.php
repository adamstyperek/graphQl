<?php


namespace App\Provider;


use App\DTO\ProjectManager;
use App\Exception\PersonNotExistsException;
use App\Factory\ProjectManagerFactory;
use InvalidArgumentException;
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
    public function getOneById(string $id): ProjectManager
    {
        $projectManagers = $this->getAll();
        foreach ($projectManagers as $projectManager) {
            if ($projectManager->getId() == $id) {
                return $projectManager;
            }
        }

        throw new PersonNotExistsException();
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        $projectManagers = [];
        $filePath = $this->parameterBag->get('dataDir') . 'ProjectManagers.json';
        $jsonString = file_get_contents($filePath);
        $jsonArray = json_decode($jsonString);
        foreach ($jsonArray as $jsonObject) {
            try {
                $projectManagers[] = ProjectManagerFactory::createDTOFromJson(json_encode($jsonObject));
            } catch (InvalidArgumentException $exception) {
                //You can log here that some data was invalid
            }
        }
        return $projectManagers;
    }
}