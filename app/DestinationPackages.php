<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinationPackages extends Model 
{

    protected $table = 'destination_packages';
    public $timestamps = true;
    protected $fillable = array('package_id');

}