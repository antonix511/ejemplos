<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Service\Employee\EmployeeGetService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class EmployeeGetController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(EmployeeGetService $service)
    {
        $this->service = $service;
    }

    public function __invoke($documentNumber)
    {
        $response = $this->service->__invoke($documentNumber);
        return $this->makeJsonResponse('OK', 200, 'Empleado ha sido obtenido', $response);
    }
}
