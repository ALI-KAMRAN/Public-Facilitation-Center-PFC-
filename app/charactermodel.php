<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class charactermodel extends Model
{
    public $timestamps = false;
    protected $table='character_certificate';
    protected $fillable =['applicant_name','father_name','cnic','address','email_address',
    'cell_number','birthday','gender','purpose','from','to','pic','cnic_pic','district','police_station'
    ,'passport','status','issue_date'
    ];
}
