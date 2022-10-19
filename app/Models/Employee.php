<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['country_id',
	'state_id',
	'city_id',
	'department_id',
	'first_name',
	'last_name',
	'address',
	'zip_code',
	'birth_date',
	'date_hired'];


}
