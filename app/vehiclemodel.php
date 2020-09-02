<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiclemodel extends Model
{
    public $timestamps = false;
    protected $table='Vehicle_Verification';
    protected $fillable =['name','f_name','cnic','address','email',
    'cell_no','dob','gender','vehicle_no','vehicle_detail','district'
    ];
}
