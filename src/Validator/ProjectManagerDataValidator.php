<?php


namespace App\Validator;

use InvalidArgumentException;
use Webmozart\Assert\Assert;


class ProjectManagerDataValidator
{
    public static function validateJson(string $json)
    {

        $jsonObject = json_decode($json);
        if (is_null($jsonObject)) {
            throw new InvalidArgumentException("Wrong object");
        }
        if (property_exists($jsonObject, 'id')) {
            Assert::notEmpty($jsonObject->id);
        } else {
            throw new InvalidArgumentException("Property id cannot be empty");
        }
        if (property_exists($jsonObject, 'firstName')) {
            Assert::notEmpty($jsonObject->firstName);
        } else {
            throw new InvalidArgumentException("Property First name cannot be empty");
        }
        if (property_exists($jsonObject, 'lastName')) {
            Assert::notEmpty($jsonObject->lastName);
        } else {
            throw new InvalidArgumentException("Property last name cannot be empty");
        }
        if (property_exists($jsonObject, 'emailAddress')) {
            Assert::notEmpty($jsonObject->emailAddress);
        } else {
            throw new InvalidArgumentException("Property email address cannot be empty");
        }

    }
}