<?php

namespace App\Http\Repository;

use App\Exceptions\Repository\DatabaseOperationException;
use App\Exceptions\Repository\ModelNotFoundException;
use App\Models\Company;
use Illuminate\Database\QueryException;

class CompanyRepository
{
    public function save(Company $company)
    {
        try {
            $company->save();
        } catch (QueryException $e) {
            throw new DatabaseOperationException("Company cannot be created, identification_number duplicated: " . $company->identification_number);
        }
    }

    public function update(Company $company)
    {
        try {
            $company->save();
            return $company;
        } catch (QueryException $e) {
            throw new DatabaseOperationException("La compañia no pudo ser actualizada, intentelo denuevo.");
        }
    }

    public function delete(Company $company)
    {
        try {
            $company->delete();
        } catch (QueryException $e) {
            throw new DatabaseOperationException('La compañia no pudo ser eliminada, intentelo denuevo.');
        }
    }

    public function show()
    {
        $companies = Company::all();
        return $companies;
    }

    public function get($identificationNumber)
    {
        $company = Company::where('identification_number', $identificationNumber)->first();
        if (is_null($company)) {
            throw new ModelNotFoundException('companies-get', 'Compañia no ha sido encontrada');
        }
        return $company;
    }
}
