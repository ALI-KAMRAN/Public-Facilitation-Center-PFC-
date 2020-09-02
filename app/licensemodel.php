<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class licensemodel extends Model
{
    public $timestamps = false;
    protected $table='Driving_License';
    protected $fillable =['name','f_name','cnic','address','email',
    'cell_no','dob','gender','blood_group','license_type','pic'
    ];
}
