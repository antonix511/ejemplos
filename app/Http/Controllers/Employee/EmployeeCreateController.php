<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Service\Employee\EmployeeCreateService;
use App\Http\Shared\ResponseMaker;
use Illuminate\Http\Request;

class EmployeeCreateController extends Controller
{
    use ResponseMaker;

    private $service;

    public function __construct(EmployeeCreateService $service)
    {
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        $data = $request->all();
        $this->service->__invoke($data);
        return $this->makeJsonResponse('OK', 200, 'Empleado creado correctamente.', []);
    }
}
