<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Service\Employee\EmployeeListService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class EmployeeListController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(EmployeeListService $service)
    {
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        $response = $this->service->__invoke();
        return $this->makeJsonResponse('OK', 200, 'Informacion obtenida', $response);
    }
}
