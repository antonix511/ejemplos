<?php

namespace App\Http\Service\Employee;

use App\Http\Repository\EmployeeRepository;

class EmployeeListService
{
    private $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $employees = $this->repository->show();
        return $employees->toArray();
    }
}
