<?php

namespace App\Http\Service\Employee;

use App\Http\Repository\EmployeeRepository;

class EmployeeUpdateService
{
    private $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($documentNumber, array $data)
    {
        $employee = $this->repository->get($documentNumber);
        $employee = $this->repository->update($employee, $data);
        return $employee->toArray();
    }
}
