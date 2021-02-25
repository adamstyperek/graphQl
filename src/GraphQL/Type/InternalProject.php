<?php


namespace App\GraphQL\Type;

use App\GraphQL\TypeInterface\Project;
use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * Class InternalProject
 * @package App\GraphQL\Type
 * @GQL\Type(Interfaces={"Project"})
 * @GQL\Description("An internal project processed in the organization")
 */
class InternalProject extends Project
{

}