<?php

namespace App\Http\Service\Company;

use App\Http\Repository\CompanyRepository;

class CompanyUpdateService
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke($identificationNumber, array $data)
    {
        $company = $this->repository->get($identificationNumber);
        $company->updateCompany($data);
        $company = $this->repository->update($company);
        return $company->toArray();
    }
}
