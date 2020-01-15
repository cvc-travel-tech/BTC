<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // dd('test');
        Form::component('bsText', 'admin.Form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('ckeditor', 'admin.Form.ckeditor', ['name', 'value' => null, 'attributes' => []]);
        Form::component('img', 'admin.Form.img', ['name', 'value' => null, 'attributes' => []]);
    }
}
