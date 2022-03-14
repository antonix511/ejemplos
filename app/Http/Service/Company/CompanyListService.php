<?php

namespace App\Http\Service\Company;

use App\Http\Repository\CompanyRepository;

class CompanyListService
{
    private $repository;

    public function __construct(CompanyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        $companies = $this->repository->show();
        return $companies->toArray();
    }
}
