<?php

declare(strict_types=1);

namespace App\Application\UseCase\FizzBuzz;

use App\Domain\Service\FizzBuzzService;

class GetFizzBuzz implements GetFizzBuzzInterface
{
    public function __construct(
        private FizzBuzzService $service
    ) {
    }

    public function handle(): array
    {
        $response = [];
        for($i=1; $i<=100; $i++) {
            $response[] = $this->service->handle($i);
        }

        return $response;
    }
}
