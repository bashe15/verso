<?php

declare(strict_types=1);

namespace App\Application\UseCase\FizzBuzz;

interface GetFizzBuzzInterface
{
    public function handle(): array;
}
