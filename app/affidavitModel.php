<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class affidavitModel extends Model
{
    public $timestamps = false;
    protected $table='affidavit_report';
    protected $fillable =['name','f_name','cnic','address','email',
    'cell_no','dob','gender','whitness_1n','whitness_2n','whitness_1f','whitness_2f'
    ,'affidavit_purpose'
    ];
}
