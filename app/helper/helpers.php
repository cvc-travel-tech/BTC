<?php
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
        else if ($attributes['type'] == 'img')
            return Form::img($name, $value, $attributes);
        else if ($attributes['type'] == 'json')
            return Form::json($name, $attributes['inputs'], $value, $attributes);
    }
}
