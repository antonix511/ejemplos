<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'lastname',
        'document_id',
        'document_number',
        'email',
        'phone',
        'address',
        'city'
    ];

    public static function makeEmployee(array $data)
    {
        $employee = new self();
        $employee->name = $data['name'];
        $employee->lastname = $data['lastname'];
        $employee->document_id = 1;
        $employee->document_number = $data['document_number'];
        $employee->email = $data['email'];
        $employee->phone = $data['phone'];
        $employee->address = $data['address'];
        $employee->city = $data['city'];
        return $employee;
    }

    public function updateEmployee(array $data)
    {
        $this->name = (isset($data['name'])) ? $data['name'] : null;
        $this->lastname = (isset($data['lastname'])) ? $data['lastname'] : null;
        $this->document_number = (isset($data['document_number'])) ? $data['document_number'] : null;
        $this->email = (isset($data['email'])) ? $data['email'] : null;
        $this->phone = (isset($data['phone'])) ? $data['phone'] : null;
        $this->address = (isset($data['address'])) ? $data['address'] : null;
        $this->city = (isset($data['city'])) ? $data['city'] : null;
    }
}
