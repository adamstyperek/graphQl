<?php


namespace App\Tests\Factory;


use App\DTO\ProjectManager;
use App\Factory\ProjectManagerFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;


class ProjectManagerFactoryTest extends TestCase
{
    const EMPTY_STRING = '';
    const FIRST_NAME = 'John';
    const LAST_NAME = 'Doe';
    const EMAIL_ADDRESS = 'john.doe@jelly.solutions';
    const ID = 'fa5a174c-8074-4014-a3d3-eccad6780ca0';

    public function testCreateNewProjectManagerFromCorrectJson()
    {
        $correctJson = $this->getCorrectJson();
        /**
         * @var ProjectManager
         */
        $projectManager = ProjectManagerFactory::createDTOFromJson($correctJson);
        self::assertEquals(self::ID, $projectManager->getId());
        self::assertEquals(self::FIRST_NAME, $projectManager->getFirstName());
        self::assertEquals(self::LAST_NAME, $projectManager->getLastName());
        self::assertEquals(self::EMAIL_ADDRESS, $projectManager->getEmailAddress());
    }

    private function getCorrectJson(): string
    {
        $jsonObject = (object)array(
            'id' => self::ID,
            'firstName' => self::FIRST_NAME,
            'lastName' => self::LAST_NAME,
            'emailAddress' => self::EMAIL_ADDRESS
        );
        return json_encode($jsonObject);

    }

    public function testCreateNewProjectManagerFromIncorrectJsonThrowsInvalidArgumentException()
    {
        self::expectException(InvalidArgumentException::class);
        ProjectManagerFactory::createDTOFromJson(self::EMPTY_STRING);
        self::assertEquals(1, 1);
    }
}