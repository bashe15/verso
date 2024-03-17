<?php
declare(strict_types=1);

namespace Tests\Integration\Application\UseCase\FizzBuzz;

use App\Application\UseCase\FizzBuzz\GetFizzBuzz;
use App\Domain\Service\FizzBuzzService;
use PHPUnit\Framework\TestCase;

class GetFizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        // Assuming the class that contains the handle() method is called FizzBuzz
        $this->fizzBuzz = new GetFizzBuzz(new FizzBuzzService());
    }

    public function testHandle()
    {
        $expected = [];

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $expected[] = 'FizzBuzz';
            } elseif ($i % 3 == 0) {
                $expected[] = 'Fizz';
            } elseif ($i % 5 == 0) {
                $expected[] = 'Buzz';
            } else {
                $expected[] = $i;
            }
        }

        $response = $this->fizzBuzz->handle();

        $this->assertEquals($expected, $response, "The FizzBuzz sequence does not match the expected values.");
    }
}
