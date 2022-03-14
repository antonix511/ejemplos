<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Service\Employee\EmployeeDeleteService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class EmployeeDeleteController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(EmployeeDeleteService $service)
    {
        $this->service = $service;
    }

    public function __invoke($documentNumber)
    {
        $this->service->__invoke($documentNumber);
        return $this->makeJsonResponse('OK', 200, 'El empleado ha sido eliminado', []);
    }
}
