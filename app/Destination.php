<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model 
{

    protected $table = 'destinations';
    public $timestamps = true;
    protected $fillable = array('description', 'name', 'tmp_img', 'img', 'locations');

    public function tmpImg()
    {
        return $this->belongsTo('App\Image', 'tmp_img');
    }

    public function Img()
    {
        return $this->belongsTo('App\Image', 'img');
    }

    public function Hotels()
    {
        return $this->hasMany('App\Hotel', 'destination_id');
    }

    public function Packages()
    {
        return $this->belongsToMany('App\Package', 'package_id');
    }

}