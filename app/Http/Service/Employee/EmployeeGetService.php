<?php

namespace App\Http\Service\Employee;

use App\Http\Repository\EmployeeRepository;

class EmployeeGetService
{
    private $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($documentNumber)
    {
        $response = $this->repository->get($documentNumber);
        return $response->toArray();
    }
}
