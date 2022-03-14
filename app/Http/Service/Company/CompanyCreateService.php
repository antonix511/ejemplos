<?php

namespace App\Http\Service\Company;

use App\Http\Repository\CompanyRepository;
use App\Models\Company;

class CompanyCreateService
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(array $data)
    {
        $company = Company::makeCompany($data);
        $this->repository->save($company);
        return true;
    }
}
