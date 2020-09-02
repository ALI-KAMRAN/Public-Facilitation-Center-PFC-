<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crimemodel extends Model
{
    public $timestamps = false;
    protected $table='Crime_Report';
    protected $fillable =['name','f_name','cnic','address','email',
    'cell_no','dob','gender','crime_type','crime_detail','district','applicant_pic'
    ];
}
