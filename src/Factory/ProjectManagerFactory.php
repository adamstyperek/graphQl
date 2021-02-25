<?php


namespace App\Factory;


use App\DTO\ProjectManager;
use App\Validator\ProjectManagerDataValidator;

class ProjectManagerFactory
{
    /**
     * @param string $json
     * @return ProjectManager
     */
    public static function createDTOFromJson(string $json): ProjectManager
    {
        ProjectManagerDataValidator::validateJson($json);
        $jsonObject = json_decode($json);
        return new ProjectManager($jsonObject->id, $jsonObject->firstName, $jsonObject->lastName, $jsonObject->emailAddress);

    }
}