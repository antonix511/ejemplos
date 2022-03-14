<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Service\Company\CompanyCreateService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class CompanyCreateController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(CompanyCreateService $service)
    {
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        $data = $request->all();
        $this->service->__invoke($data);
        return $this->makeJsonResponse('OK', 200, 'Company has been created.', []);
    }
}
