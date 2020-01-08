<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelPackage extends Model 
{

    protected $table = 'hotel_packages';
    public $timestamps = true;
    protected $fillable = array('hotel_id');

}