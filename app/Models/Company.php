<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'identification_number',
        'address',
        'city',
        'state',
        'latitude',
        'longitude'
    ];

    public static function makeCompany(array $data)
    {
        $company = new self();
        $company->name = $data['name'];
        $company->identification_number = $data['identification_number'];
        $company->address = $data['address'];
        $company->city = $data['city'];
        $company->state = $data['state'];
        $company->latitude = (isset($data['latitude'])) ? $data['latitude'] : 0;
        $company->longitude = (isset($data['longitude'])) ? $data['longitude'] : 0;
        return $company;
    }

    public function updateCompany(array $data)
    {
        $this->name = (isset($data['name'])) ? $data['name'] : null;
        $this->identification_number = (isset($data['identification_number'])) ? $data['identification_number'] : null;
        $this->address = (isset($data['address'])) ? $data['address'] : null;
        $this->city = (isset($data['city'])) ? $data['city'] : null;
        $this->state = (isset($data['state'])) ? $data['state'] : null;
        $this->latitude = (isset($data['latitude'])) ? $data['latitude'] : null;
        $this->longitude = (isset($data['longitude'])) ? $data['longitude'] : null;
    }
}
