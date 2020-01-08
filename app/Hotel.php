<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model 
{

    protected $table = 'hotels';
    public $timestamps = true;
    protected $fillable = array('name', 'images', 'overview', 'destination_id');

    public function Destination()
    {
        return $this->belongsTo('App\Destination', 'destination_id');
    }

    public function Packages()
    {
        return $this->belongsToMany('App\Package', 'package_id');
    }

}