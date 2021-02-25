<?php


namespace App\GraphQL\Type;

use App\GraphQL\TypeInterface\Project;
use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * Class ExternalProject
 * @package App\GraphQL\Type
 * @GQL\Type(Interfaces={"Project"})
 * @GQL\Description("An external project processed in the organization")
 */
class ExternalProject extends Project
{
    /**
     * @var int
     * @GQL\Field(type="Int!")
     * @GQL\Description("Project costs in cents")
     */
    public $cost;

    /**
     * @var int
     * @GQL\Field(type="Int!")
     * @GQL\Description("Project price in cents")
     */
    public $price;
}