<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiclestatus extends Model
{
    public $timestamps = false;
    protected $table='Vehicle_Status';
    protected $fillable =['vehicle_no'
    ];
}
