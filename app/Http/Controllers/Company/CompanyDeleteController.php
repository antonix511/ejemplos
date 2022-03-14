<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Service\Company\CompanyDeleteService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class CompanyDeleteController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(CompanyDeleteService $service)
    {
        $this->service = $service;
    }

    public function __invoke($identificationNumber)
    {
        $this->service->__invoke($identificationNumber);
        return $this->makeJsonResponse('OK', 200, 'La compañia ha sido eliminada', []);
    }
}
