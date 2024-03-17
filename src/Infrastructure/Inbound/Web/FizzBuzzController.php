<?php

declare(strict_types=1);

namespace App\Infrastructure\Inbound\Web;

use App\Application\UseCase\FizzBuzz\GetFizzBuzzInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class FizzBuzzController extends AbstractController
{
    public function __construct(
        private GetFizzBuzzInterface $fizzBuzz
    )
    {
    }

    public function __invoke(): JsonResponse
    {
        return new JsonResponse($this->fizzBuzz->handle());
    }
}
