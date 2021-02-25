<?php


namespace App\Tests\Validator;


use App\Validator\ProjectManagerDataValidator;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ProjectManagerDataValidatorTest extends TestCase
{
    public function testWhenObjectHasNoIdThenThrowsInvalidArgument()
    {
        self::expectException(InvalidArgumentException::class);
        $jsonObject = (object)array(
            'firstName' => 'John',
            'lastName' => 'Doe',
            'emailAddress' => 'john.doe@jelly.solutions'
        );
        ProjectManagerDataValidator::validateJson(json_encode($jsonObject));
        self::assertEquals(1, 1);
    }

    public function testWhenObjectHasNoFirstNameThenThrowsInvalidArgument()
    {
        self::expectException(InvalidArgumentException::class);
        $jsonObject = (object)array(
            'id' => '123',
            'lastName' => 'Doe',
            'emailAddress' => 'john.doe@jelly.solutions'
        );
        ProjectManagerDataValidator::validateJson(json_encode($jsonObject));
        self::assertEquals(1, 1);
    }

    public function testWhenObjectHasNoLastNameThenThrowsInvalidArgument()
    {
        self::expectException(InvalidArgumentException::class);
        $jsonObject = (object)array(
            'id' => '123',
            'firstName' => 'John',
            'emailAddress' => 'john.doe@jelly.solutions'
        );
        ProjectManagerDataValidator::validateJson(json_encode($jsonObject));
        self::assertEquals(1, 1);
    }

    public function testWhenObjectHasNoEmailAddressThenThrowsInvalidArgument()
    {
        self::expectException(InvalidArgumentException::class);
        $jsonObject = (object)array(
            'id' => '123',
            'firstName' => 'John',
            'lastName' => 'Doe',
        );
        ProjectManagerDataValidator::validateJson(json_encode($jsonObject));
        self::assertEquals(1, 1);
    }

    public function testWhenObjectHasAllValidaData()
    {
        $jsonObject = (object)array(
            'id' => '123',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'emailAddress' => 'john.doe@jelly.solutions'
        );
        ProjectManagerDataValidator::validateJson(json_encode($jsonObject));
        self::assertEquals(1, 1);
    }

}