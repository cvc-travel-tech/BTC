<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Destination extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $table = 'destinations';
    public $timestamps = true;
    protected $fillable = array('description', 'name', 'tmp_img', 'img', 'locations');
    protected $casts = [
        'locations' => 'array', // Will convarted to (Array)
    ];
    public function tmpImg()
    {
        return $this->belongsTo('App\Images', 'tmp_img');
    }

    public function Img()
    {
        return $this->belongsTo('App\Images', 'img');
    }

    public function Hotels()
    {
        return $this->hasMany('App\Hotel', 'destination_id');
    }

    public function Packages()
    {
        return $this->belongsToMany('App\Package', 'package_id');
    }


    public function getSeoMeta()
    {
        $meta = SEO::where('object_id', $this->id)->where('object_model', 'Destination')->first();
        if (!empty($meta)) {
            $meta = $meta->toArray();
        }
        // $meta['slug'] = $this->slug;
        // $meta['full_url'] = $this->getDetailUrl();
        $meta['service_title'] = $this->name;
        return $meta;
    }
}
