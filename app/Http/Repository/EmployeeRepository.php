<?php

namespace App\Http\Repository;

use App\Exceptions\Repository\DatabaseOperationException;
use App\Exceptions\Repository\ModelNotFoundException;
use App\Models\Employee;
use Illuminate\Database\QueryException;

class EmployeeRepository
{
    public function save(Employee $employee)
    {
        try {
            $employee->save();
        } catch (QueryException $e) {
            throw new DatabaseOperationException('Empleado no ha podido ser creado');
        }
    }

    public function update(Employee $employee, array $data)
    {
        try {
            $employee->updateEmployee($data);
            $employee->save();
            return $employee;
        } catch (QueryException $e) {
            throw new DatabaseOperationException('Empleado no ha podido ser actualizado.');
        }
    }

    public function delete(Employee $employee)
    {
        try {
            $employee->delete();
        } catch (QueryException $e) {
            throw new DatabaseOperationException('Error al intentar eliminar al empleado.');
        }
    }

    public function show()
    {
        $employees = Employee::all();
        return $employees;
    }

    public function get($documentNumber)
    {
        $employee = Employee::where('document_number', $documentNumber)->first();
        if (is_null($employee)) {
            throw new ModelNotFoundException('El empleado no ha sido encontrado');
        }
        return $employee;
    }
}
