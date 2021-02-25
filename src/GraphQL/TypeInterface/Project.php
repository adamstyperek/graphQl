<?php


namespace App\GraphQL\TypeInterface;

use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * Class Project
 * @package App\GraphQL\TypeInterface
 * @GQL\TypeInterface(resolveType="@=query('project_type', value)")
 * @GQL\Description("A project processed in the organization")
 */
abstract class Project
{
    /**
     * @var string
     * @GQL\Field(type="String!")
     * @GQL\Description("The id of the project")
     */
    public $id;

    /**
     * @var string
     * @GQL\Field(type="String!")
     * @GQL\Description("The name of the project")
     */
    public $name;

    /**
     * @var Person
     * @GQL\Field(type="Person")
     * @GQL\Description("The manager of the project")
     */
    public $projectManager;
}