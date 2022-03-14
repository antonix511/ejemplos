<?php

namespace App\Http\Service\Employee;

use App\Http\Repository\EmployeeRepository;

class EmployeeDeleteService
{
    private $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($documentNumber)
    {
        $employee = $this->repository->get($documentNumber);
        $this->repository->delete($employee);
        return true;
    }
}
