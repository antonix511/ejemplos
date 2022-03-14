<?php

namespace App\Http\Service\Employee;

use App\Http\Repository\EmployeeRepository;
use App\Models\Employee;

class EmployeeCreateService
{
    private $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(array $data)
    {
        $employee = Employee::makeEmployee($data);
        $this->repository->save($employee);
        return true;
    }
}
