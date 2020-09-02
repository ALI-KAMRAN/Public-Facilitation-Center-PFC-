<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class characterStatus extends Model
{
    public $timestamps = false;
    protected $table='character_status';
    protected $fillable =['cnic','status'];
}
