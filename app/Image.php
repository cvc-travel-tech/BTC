<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model 
{

    protected $table = 'images';
    public $timestamps = true;
    protected $fillable = array('file_path', 'file_name', 'file_type');

}