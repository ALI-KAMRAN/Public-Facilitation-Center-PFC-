<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lossmodel extends Model
{
    public $timestamps = false;
    protected $table='Loss_Report';
    protected $fillable =['name','f_name','cnic','address','email',
    'cell_no','dob','gender','lost_item','loss_detail','lost_area','lost_district','police_station','applicant_pic'
    ];
}
