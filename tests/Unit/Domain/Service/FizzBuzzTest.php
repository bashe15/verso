<?php

declare(strict_types=1);

namespace tests\Unit\Domain\Service;

use App\Domain\Service\FizzBuzzService;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzzService $fizzBuzz;

    protected function setUp(): void
    {
        // Assuming the class that contains the handle() method is called FizzBuzz
        $this->fizzBuzz = new FizzBuzzService();
    }

    public function testReturnsFizzBuzzForNumbersDivisibleByBothThreeAndFive()
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->handle(15));
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->handle(30));
    }

    public function testReturnsFizzForNumbersDivisibleByThree()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->handle(3));
        $this->assertEquals('Fizz', $this->fizzBuzz->handle(6));
        $this->assertEquals('Fizz', $this->fizzBuzz->handle(9));
    }

    public function testReturnsBuzzForNumbersDivisibleByFive()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->handle(5));
        $this->assertEquals('Buzz', $this->fizzBuzz->handle(10));
    }

    public function testReturnsNumberForNumbersNotDivisibleByThreeOrFive()
    {
        $this->assertEquals(1, $this->fizzBuzz->handle(1));
        $this->assertEquals(2, $this->fizzBuzz->handle(2));
        $this->assertEquals(4, $this->fizzBuzz->handle(4));
    }
}