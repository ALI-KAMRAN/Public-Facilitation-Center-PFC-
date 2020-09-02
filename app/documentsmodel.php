<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documentsmodel extends Model
{
    public $timestamps = false;
    protected $table='documents_verification';
    protected $fillable =['applicant_name','father_name','cnic','address','email',
    'cell_number','birthday','gender','purpose','documents_detail','quantity','receipt','receipt','district'
    ];
}
