<?php

use App\Images;

if (!function_exists('random_code')) {
    function random_code()
    {

        return rand(1111, 9999);
    }
}


if (!function_exists('getInput')) {
    function getInput($name, $value = null, $attributes = [])
    {

        if ($attributes['type'] == 'text')
            return Form::bsText($name, $value, $attributes);
        else if ($attributes['type'] == 'ckeditor')
            return Form::ckeditor($name, $value, $attributes);
        else if ($attributes['type'] == 'textarea')
            return Form::bsTextarea($name, $value, $attributes);
        else if ($attributes['type'] == 'number')
            return Form::bsNumber($name, $value, $attributes);
        else if ($attributes['type'] == 'img')
            return Form::img($name, $value, $attributes);
        else if ($attributes['type'] == 'multi-image')
            return Form::multiImg($name, $value, $attributes);
        else if ($attributes['type'] == 'json')
            return Form::json($name, $attributes['inputs'], $value, $attributes);
    }
}


if (!function_exists('getJsonInput')) {
    function getJsonInput($jsonName, $inputName, $value = null, $attributes = [], $value_key = null)
    {
        if ($attributes['type'] == 'text')
            return Form::jsonBsText($jsonName, $inputName, $value, $attributes, $value_key);
        else if ($attributes['type'] == 'ckeditor')
            return Form::jsonCkeditor($jsonName, $inputName, $value, $attributes, $value_key);
        else if ($attributes['type'] == 'img')
            return Form::jsonImg($jsonName, $inputName, $value, $attributes, $value_key);
        else if ($attributes['type'] == 'textarea')
            return Form::jsonBsTextarea($jsonName, $inputName, $value, $attributes, $value_key);
        else if ($attributes['type'] == 'number')
            return Form::jsonBsNumber($jsonName, $inputName, $value, $attributes, $value_key);
    }
}

if (!function_exists('getImg')) {
    function getImg($id)
    {
        return asset('storage/tmp/uploads/large') . "/" . Images::find($id)->file_path;
    }
}

if (!function_exists('SeoInput')) {
    function SeoInput($seo = null)
    {
        $test = "" . Form::bsText('seo_title', $seo['seo_title']) .
            Form::bsTextarea('seo_desc', $seo['seo_desc'])
            . Form::img('seo_image', $seo['seo_image']) . "";
        return $test;
    }
}
