<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $timestamps = false;
    protected $table='kamboh';
    protected $fillable =['name','address'];
    
}
