<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Service\Employee\EmployeeUpdateService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class EmployeeUpdateController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(EmployeeUpdateService $service)
    {
        $this->service = $service;
    }

    public function __invoke($documentNumber, Request $request)
    {
        $data = $request->all();
        $response = $this->service->__invoke($documentNumber, $data);
        return $this->makeJsonResponse('OK', 200, 'Empleado actualizado', $response);
    }
}
