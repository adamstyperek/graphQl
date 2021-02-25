<?php


namespace App\GraphQL\Type;

use App\GraphQL\TypeInterface\Person;
use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * Class ProjectManager
 * @package App\GraphQL\Type
 * @GQL\Type(Interfaces={"Person"})
 * @GQL\Description("A manager of the project")
 */
class ProjectManager extends Person
{

}