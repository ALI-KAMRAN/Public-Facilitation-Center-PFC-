<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addstampmodel extends Model
{
    public $timestamps = false;
    protected $table='products';
    protected $fillable =['description','stamp_title','stamp_image','price'
    ];
}
