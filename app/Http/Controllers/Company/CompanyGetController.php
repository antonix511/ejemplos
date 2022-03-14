<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Service\Company\CompanyGetService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class CompanyGetController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(CompanyGetService $service)
    {
        $this->service = $service;
    }

    public function __invoke($identificationNumber)
    {
        $response = $this->service->__invoke($identificationNumber);
        return $this->makeJsonResponse('OK', 200, 'Compañia ha sido obtenida', $response);
    }
}
