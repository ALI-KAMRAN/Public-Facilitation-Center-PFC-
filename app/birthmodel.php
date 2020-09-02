<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class birthmodel extends Model
{
    public $timestamps = false;
    protected $table='birth_certificate';
    protected $fillable =['applicant_name','f_name','applicant_cnic','address','email',
    'cell_no','dob','gender','religion','g_father','g_cnic','child_pic','relation_child','district','m_name'
    ,'child_name','status'
    ];
}
