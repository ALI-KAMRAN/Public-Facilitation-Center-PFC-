<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedbackModel extends Model
{
    public $timestamps = false;
    protected $table='feedback';
    protected $fillable =['name','message','cell_no','email'
    ];
}
