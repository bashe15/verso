<?php

declare(strict_types=1);

namespace App\Domain\Service;
class FizzBuzzService
{
    public function handle(int $number): string|int
    {
        if($number % 3 == 0 && $number % 5 == 0) {
            return 'FizzBuzz';
        } else  if($number % 3 == 0) {
            return 'Fizz';
        } else  if( $number % 5 == 0) {
            return 'Buzz';
        }

        return $number;
    }
}
