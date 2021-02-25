<?php


namespace App\Provider;


use App\DTO\ProjectManager;

interface ProjectManagerProvider
{
    /**
     * @return array
     */
    public function getAll(): array;

    /**
     * @param string $id
     * @return ProjectManager
     */
    public function getOneById(string $id): ProjectManager;
}