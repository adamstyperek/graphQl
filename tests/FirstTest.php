<?php


namespace App\Tests;


use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    const EXPECTED_RESULT = 3;
    const FACTOR_1 = 1;
    const FACTOR_2 = 2;

    public function testResultOfAddIsCorrect(): void
    {
        $result = self::FACTOR_1 + self::FACTOR_2;
        self::assertEquals(self::EXPECTED_RESULT, $result);
    }
}