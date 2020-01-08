<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model 
{

    protected $table = 'packages';
    public $timestamps = true;
    protected $fillable = array('name', 'slug');

    public function Destinations()
    {
        return $this->belongsToMany('App\Destination', 'destination_id');
    }

    public function Hotels()
    {
        return $this->belongsToMany('App\Hotel', 'hotel_id');
    }

}