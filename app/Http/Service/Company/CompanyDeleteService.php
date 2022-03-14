<?php

namespace App\Http\Service\Company;

use App\Http\Repository\CompanyRepository;

class CompanyDeleteService
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($identification_number)
    {
        $company = $this->repository->get($identification_number);
        $this->repository->delete($company);
    }
}
