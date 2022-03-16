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
        (isset($data['name'])) ? $this->name = $data['name'] : null;
        (isset($data['identification_number'])) ? $this->identification_number = $data['identification_number'] : null;
        (isset($data['address'])) ? $this->address = $data['address'] : null;
        (isset($data['city'])) ? $this->city =  $data['city'] : null;
        (isset($data['state'])) ? $this->state =  $data['state'] : null;
        (isset($data['latitude'])) ? $this->latitude = $data['latitude'] : null;
        (isset($data['longitude'])) ? $this->longitude = $data['longitude'] : null;
    }
}
