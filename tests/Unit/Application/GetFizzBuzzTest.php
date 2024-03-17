<?php

declare(strict_types=1);

namespace Tests\Unit\Application;

use PHPUnit\Framework\TestCase;
use App\Application\UseCase\FizzBuzz\GetFizzBuzz;
use App\Domain\Service\FizzBuzzService;

class GetFizzBuzzTest extends TestCase
{
    private FizzBuzzService $fizzBuzzServiceMock;
    private GetFizzBuzz $getFizzBuzz;

    protected function setUp(): void
    {
        // Create a mock for the FizzBuzzService
        $this->fizzBuzzServiceMock = $this->createMock(FizzBuzzService::class);

        // Instantiate GetFizzBuzz with the mocked FizzBuzzService
        $this->getFizzBuzz = new GetFizzBuzz($this->fizzBuzzServiceMock);
    }

    public function testHandleReturnsCorrectArray()
    {
        // Setup the expected responses from the mock
        $expectedResponses = [];
        for ($i = 1; $i <= 100; $i++) {
            $expectedResponses[] = $this->getExpectedFizzBuzzValue($i);
        }

        // Configure the mock to return the correct value for each input
        $this->fizzBuzzServiceMock
            ->method('handle')
            ->will($this->returnCallback(function ($number) {
                return $this->getExpectedFizzBuzzValue($number);
            }));

        // Execute the handle method
        $result = $this->getFizzBuzz->handle();

        // Assert that the result matches the expected array
        $this->assertEquals($expectedResponses, $result);
    }

    private function getExpectedFizzBuzzValue(int $number)
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        }
        if ($number % 3 === 0) {
            return 'Fizz';
        }
        if ($number % 5 === 0) {
            return 'Buzz';
        }
        return (string)$number;
    }
}
