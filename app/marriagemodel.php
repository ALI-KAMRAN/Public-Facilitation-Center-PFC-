<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marriagemodel extends Model
{
    public $timestamps = false;
    protected $table='Marriage_Certificate';
    protected $fillable =['g_name','g_f_name','g_cnic','g_address','email',
    'cell_no','g_dob','g_religion','g_status','g_tehsil','g_address','g_district',
    'b_name','b_f_name','b_cnic','b_address',
    'b_dob','b_religion','b_status','b_tehsil','b_address','b_district','marriage_date',
    'solemnized_name','solemnized_cnic','b_nationality','g_nationality'
    ];
}
