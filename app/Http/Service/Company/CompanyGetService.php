<?php

namespace App\Http\Service\Company;

use App\Http\Repository\CompanyRepository;

class CompanyGetService
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($identificationNumber)
    {
        $company = $this->repository->get($identificationNumber);
        return $company->toArray();
    }
}
