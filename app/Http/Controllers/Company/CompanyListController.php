<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Service\Company\CompanyListService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class CompanyListController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(CompanyListService $service)
    {
        $this->service = $service;
    }

    public function __invoke()
    {
        $response = $this->service->__invoke();
        return $this->makeJsonResponse('OK', 200, 'Listado de compañias obtenido', $response);
    }
}
