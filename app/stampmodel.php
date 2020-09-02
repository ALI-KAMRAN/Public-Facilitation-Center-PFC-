<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stampmodel extends Model
{
    public $timestamps = false;
    protected $table='stamp_paper_data';
    protected $fillable =['name','cnic','address','email',
    'cell_no','f_name','payment_method','purpose','purchase','price','comments'
    ];
}
