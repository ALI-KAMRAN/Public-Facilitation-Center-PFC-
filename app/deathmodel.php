<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deathmodel extends Model
{
    public $timestamps = false;
    protected $table='Death_Certificate';
    protected $fillable =['name','f_name','cnic','address','email',
    'cell_no','dob','religion','address','gender','death_date',
    'm_name','f_cnic','m_cnic','nationality','reason','death_place'
    ];
}
