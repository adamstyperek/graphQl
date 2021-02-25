<?php


namespace App\GraphQL\TypeInterface;

use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * Class Person
 * @package App\GraphQL\TypeInterface
 * @GQL\TypeInterface(resolveType="@=query('person_type', value)")
 * @GQL\Description("A person in organization")
 */
abstract class Person
{
    /**
     * @var string
     * @GQL\Field(type="String!")
     * @GQL\Description("The id of the Person")
     */
    public $id;

    /**
     * @var string
     * @GQL\Field(type="string")
     * @GQL\Description("The first name of the Person")
     */
    public $firstName;

    /**
     * @var string
     * @GQL\Field(type="string")
     * @GQL\Description("The last name of the Person")
     */
    public $lastName;

    /**
     * @var string
     * @GQL\Field(type="string")
     * @GQL\Description("The email address of the Person")
     */
    public $emailAddress;
}