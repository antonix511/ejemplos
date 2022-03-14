<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Service\Company\CompanyUpdateService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class CompanyUpdateController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(CompanyUpdateService $service)
    {
        $this->service = $service;
    }

    public function __invoke($identificationNumber, Request $request)
    {
        $data = $request->all();
        $response = $this->service->__invoke($identificationNumber, $data);
        return $this->makeJsonResponse('OK', 200, 'La compañia ha sido actualizada', $response);
    }
}
